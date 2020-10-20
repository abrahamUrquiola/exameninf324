<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="academico";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//$conn = mysqli_connect("localhost","abraham","");
//mysqli_select_db($conn, "academico");
if(!$conn){
    die ("no hay conexion ". mysqli_connect_error());
}

$ci=$_POST["txtCI"];
$clave=$_POST["txtclave"];
$query=mysqli_query($conn,"SELECT * FROM usuario WHERE CI= '".$ci."'AND CLAVE= '".$clave."'");
$nr=mysqli_num_rows($query);
if($nr==1){
    //echo "Bienvenido  ".$ci;
    header("location:primero.php");
}
else{
    echo "<h1>usuario no existe</h1>";
}


?>