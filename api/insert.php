<?php
header("Content-Type: application/json");

require "../includes/connection.php";

$name = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO `Users` (`Username`, `Password`) VALUES (?,?) ";
$params = [$name,$password];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if( $row > 0 )
    echo "Inserted Succesfull";
else
    echo "Data Is Not Inserted";

?>