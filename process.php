<?php
  //mysqli_connect("localhost","root","123");
  //mysql_select_db("php_databaseajax");
 
  $conexion = mysqli_connect("localhost","root","123","php_databaseajax");
   
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
        echo "<input type=\"text\" value=\"10.000 pts.\" readonly />";
        echo "<label>Hasta hoy tienes:</label>";
        echo "<input type=\"text\" value=\"$row[name] pts.\" readonly />";
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