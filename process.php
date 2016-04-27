<?php
  //mysqli_connect("localhost","root","123");
  //mysql_select_db("php_databaseajax");
	include_once 'config.php';
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");	
	
	
  //$conexion = mysqli_connect("localhost","root","123","amarrados");
   
  $action=$_POST["action"];
 
  if($action=="showcomment"){
	  
	 $name=$_POST["name"];
	
     $show=mysqli_query($conexion, "SELECT * FROM comment WHERE message = '$name' ");
	
     if($row=mysqli_fetch_array($show)){
		/*
		echo "Tu meta mensual es: 40.000 Pts";
		echo "<br>";
        echo "Hasta hoy tienes: $row[name] Pts";
		*/
		echo "<label>Tu meta mensual es de :</label>";
        echo "<input type=\"text\" value=\"40.000 sobres.\" readonly />";
        echo "<label>Hasta hoy tienes:</label>";
        echo "<input type=\"text\" value=\"$row[name] sobres.\" readonly />";
     }else{
		echo "El RUT no está registrado";
	 }
	 
  }
     
	 /*
  else if($action=="addcomment"){
    $name=$_POST["name"];
    $message=$_POST["message"];
 
     $query=mysqli_query($conexion, "INSERT INTO comment(name,message) values('$name','$message') ");
 
     if($query){
        echo "Your comment has been sent";
     }
     else{
        echo "Error in sending your comment";
     }
  }*/
?>