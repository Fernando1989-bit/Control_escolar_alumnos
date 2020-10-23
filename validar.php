<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="control_escolar_alumno";

$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
    die("No hay conexion: " .mysqli_connect_error());
}
$nombre=$_POST["txtusuario"];
$pass=$_POST["txtpassword"];

$query=mysqli_query($conn, "SELECT * FROM login WHERE usuario='".$nombre."' and password= '".$pass."'");
$nr = mysqli_num_rows ($query);
if($nr==1){
   header("location:principal.html");
}

else if($nr==0){
    echo "Verifica tus datos";
}
?>