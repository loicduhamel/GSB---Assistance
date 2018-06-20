<?php
 
/*
* Database Constants
* Make sure you are putting the values according to your database here 
*/
define('DB_HOST','mysql-assistance.alwaysdata.net');
define('DB_USERNAME','156610_ppe');
define('DB_PASSWORD','azerty');
define('DB_NAME', 'assistance_ppe');
 
//Connecting to the database
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//checking the successful connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
//making an array to store the response
$response = array(); 
 
//if there is a post request move ahead 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //getting the name from request 
 $libelle = $_POST['libelle'];  
 
 //creating a statement to insert to database 
 $stmt = $conn->prepare("INSERT INTO editeur (libelle) VALUES (?)");
 
 //binding the parameter to statement 
 $stmt->bind_param("s", $libelle);
 
 //if data inserts successfully
 if($stmt->execute()){
 //making success response 
 $response['error'] = false; 
 $response['message'] = 'Name saved successfully'; 
 }else{
 //if not making failure response 
 $response['error'] = true; 
 $response['message'] = 'Please try later';
 }
 
}else{
 $response['error'] = true; 
 $response['message'] = "Invalid request"; 
}
 
//displaying the data in json format 
echo json_encode($response);