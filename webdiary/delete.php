<?php 
    include("connect.php");
    $delete = "DELETE FROM menu WHERE id=:id";

    $statement = $con->prepare($delete);

    $statement->bindParam(":id", $_GET['id']);

    $rows = $statement->execute();

    if ($rows > 0) {
        header("location: index.php");
    }

?>