<?php

$servername = "localhost"; //padrão localhost - servidor local
$database = "crud_stock"; //db do sql que foi criada
$username = "root"; //padrão = root
$password = ""; // padrão = vazio

//Create Connection

$connect = mysqli_connect($servername, $username, $password, $database);

?>