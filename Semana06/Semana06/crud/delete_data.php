<?php

include_once("connection.php");

$id = $_GET['id'];

$conn = connect();
$query = $conn->query("DELETE FROM client WHERE CLI_ID='$id';");
$conn->close();

if ($query = 0) {
    header("Location: error.php");
} else {
    header("Location: index.php");
}
