<?php

function connect() {
    $host = "localhost";
    $user = "aulasufsc";
    $password = "ufsc";
    $db = "aulas";
    $port = "3307";

    // Cria a conexão
    $conn = new mysqli($host, $user, $password, $db, $port);

    // Verifica a conexão
    if ($conn->connect_error) {
        header("Location: error.php");
        return false;
    } else {
        return $conn;
    }
}
