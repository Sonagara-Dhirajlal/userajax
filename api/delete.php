<?php
header("Content-Type: application/json");

require "../includes/connection.php";

$id = $_POST['id'];

$query = "DELETE FROM `Users` WHERE `Id` = ? ";
$params = [$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if( $row > 0 )
    echo "Deleted Succesfull";
else
    echo "Data Is Not Inserted";

?>