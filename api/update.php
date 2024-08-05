<?php

header("Content-Type: application/json");
require "../includes/connection.php";

$id = $_POST['id'];
$name = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE `Users` SET `Username` = (?), `Password` = (?) WHERE `Id` = (?)";
$params = [$name,$password,$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if( $row > 0 )
    echo json_encode(['success'=>true , 'username'=>$name]);
else
    echo json_encode(['success'=>false]);

?>