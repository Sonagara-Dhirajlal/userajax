<?php

require "../includes/connection.php";

$id = $_POST['id'];
$name = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE `Users` SET `Username` = (?), `Password` = (?) WHERE `id` = (?)";
$params = [$name,$password,$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if( $row > 0 )
    echo "Updated Succesfull";
else
    echo "Data Is Not Inserted";

?>