<?php

function sendmail($mail,$db){
	try {

		$dataGetMail = $db->prepare('SELECT mail,password from utilisateur where mail=?');
		$dataGetMail->execute(array($mail));
		$dataGetMail->setFetchMode(PDO::FETCH_ASSOC);
		$dataMail = array();
		while($setdata = $dataGetMail->fetch()) {
			$data = array('mail' => $setdata["mail"],'password' => $setdata["password"]);
			array_push($dataMail, $data);
		}
	    $dataGetMail->closeCursor();
	    $isValid = false;
	    foreach ($dataMail as $unmail) {
	    	if($unmail['mail'] == $mail){
	    		mail($mail, 'Votre mot de passe', 'Votre mot de passe est : '.$unmail['password']);
	    		$isValid = true;
	    	}
	    }
	    if($isValid == true){
	    	$message = "Un email contenant votre mot de passe vient de vous être envoyer";
	    }
	    else{
	    	$message = "Adresse Email incorrect";
	    }
	    echo '<script type="text/javascript"> alert("'.$message.'");</script>';
	}
	catch(PDOException $e){
	   echo $e->getMessage();
	}
}
