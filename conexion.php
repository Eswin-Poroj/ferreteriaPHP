<?php
$nombreServidor = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbnombre = "fabrica";

//crear una variable para generar la conexion
$conn = mysqli_connect($nombreServidor,$username,$password,$dbnombre);

//verificar la conexion con un if

if ($conn->connect_error) {
    die("Error de Conexxión".$conn->connect_error);
}