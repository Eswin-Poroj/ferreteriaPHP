<?php
include 'DB/conexion.php';
$id=$_GET['id'];
$estado = 0;
//$sql = "DELETE FROM producto WHERE idProducto = '$id'";
$sql = "UPDATE producto SET estado='$estado' WHERE '$id'";
if ($conn->query($sql) == true) {
    $mensaje ="Producto Eliminado Exitosamente";

        echo "<script>";
        echo "alert('$mensaje + $id');";
        echo "window.location.href = 'index.php';";
        echo "</script>";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}