<?php
//Datos para conexión//
$host="localhost";//nombre de la web
$user="root";
$password="";
$db="jhoanSR";//seria la base de datos que creamos
//Creo una variable conexión//
$con=mysqli_connect($host,$user,$password)or die("problemas al conectar");
//Selecciono la base de datos//
mysqli_select_db($con,$db)or die("probelmas al seleccionar la base de datos");
?>