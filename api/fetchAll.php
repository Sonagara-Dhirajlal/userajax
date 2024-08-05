<?php

header("Content-Type: application/json");

include "../includes/connection.php";

$query = "SELECT * FROM `Users`";
$statement = $connection->prepare($query);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(['success'=>true, 'users'=>$users]);
?>