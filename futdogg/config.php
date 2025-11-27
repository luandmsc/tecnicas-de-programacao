<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'futdogg'); // nome do banco de dds

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if($conn->connect_error){
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }
?>
