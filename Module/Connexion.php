<?php
function connexion($login,$password,$db){
    try {
        $getDataConn = $db->prepare('SELECT nom, prenom, id, login, password from utilisateur');
        $getDataConn->execute();
        $getDataConn->setFetchMode(PDO::FETCH_ASSOC);
        $connData = array();

        while($setData = $getDataConn->fetch()) {
            $data = array("id"=>$setData['id'], "nom"=>$setData['nom'], "prenom"=>$setData['prenom'], "login"=>$setData['login'], "password"=>$setData['password']);
             array_push($connData, $data);
        }   

        $getDataConn->closeCursor();
        $isValid =false;
        foreach ($connData as $conn) {
            if($conn['login'] == $login && $conn['password'] == $password){
                $Lvisiteur = getIdVisiteur($db);
                session_start();
                $_SESSION['nom'] = $conn['nom'];
                $_SESSION['prenom'] = $conn['prenom'];
                foreach ($Lvisiteur as $visi) {
                    if($visi['user'] == $conn["id"]){
                        $_SESSION['idvis'] = $visi['id'];
                        header("location:mainvisi.php");
                    }
                }
                $Ltechnicien = getIdTechnicien($db);
                foreach ($Ltechnicien as $tech) {
                    if($tech['user'] == $conn["id"]){
                        $_SESSION['idtech'] = $tech['id'];
                        header("location:main.php");
                    }
                }
            }
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
        }
}

function getIdVisiteur($db){
    try {
        $dataGetVisiteur = $db->prepare('SELECT id,id_utilisateur from  visiteur');
        $dataGetVisiteur->execute();
        $dataGetVisiteur->setFetchMode(PDO::FETCH_ASSOC);
        $dataVisiteur = array();
        while($setdata = $dataGetVisiteur->fetch()) {
            $dataVis = array('id' => $setdata["id"], 'user' => $setdata["id_utilisateur"]);
            array_push($dataVisiteur, $dataVis);
        }
        $dataGetVisiteur->closeCursor();
        return $dataVisiteur;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function getIdTechnicien($db){
    try {
        $dataGetTechnicien = $db->prepare('SELECT id,id_utilisateur from  technicien');
        $dataGetTechnicien->execute();
        $dataGetTechnicien->setFetchMode(PDO::FETCH_ASSOC);
        $dataTechnicien = array();
        while($setdata = $dataGetTechnicien->fetch()) {
            $data = array('id' => $setdata["id"], 'user' => $setdata["id_utilisateur"]);
            array_push($dataTechnicien, $data);
        }
        $dataGetTechnicien->closeCursor();
        return $dataTechnicien;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
