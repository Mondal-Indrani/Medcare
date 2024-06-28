<?php

require 'reservation_db.php';

if(isset($_POST['aid'])){
    $db = new db;
    $conn = $db -> connect();
    
    $stmt = $conn-> prepare("Select * from doctor where catagory_id = ". $_POST['aid']);
    $stmt->execute();
    $doctor = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($doctor);
        
}

function loadcatagory(){
$db = new db;
$conn = $db -> connect();

$stmt = $conn-> prepare("Select * from catagory");
$stmt->execute();
$catagory = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $catagory;

}

?>