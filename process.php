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
	
     $show=mysqli_query($conexion, "SELECT * FROM vend WHERE codigo = $name AND perfil = 'vendedor' ");
	
     if($row=mysqli_fetch_array($show)){
		/*
		echo "Tu meta mensual es: 40.000 Pts";
		echo "<br>";
        echo "Hasta hoy tienes: $row[name] Pts";
		*/
		$venta_2015 = $row['venta_2015'];
		$meta_2016 = $row['meta_2016'];
		$total_meta = number_format($meta_2016,0, ",", ".");
		$lleva = $row['lleva'];
		
		$resta = $lleva - $venta_2015;
		$division = ($resta / $venta_2015);
		$porcentaje = ($division * 100);
		$porce_rend = ceil($porcentaje);
		
		$lleva_total = number_format($lleva,0, ",", ".");
		
		echo "<label>Tu meta bi-mensual (Mayo+Junio) es de :</label>";
        echo "<input type=\"text\" value=\"$total_meta\" readonly />";
        echo "<label>Hasta hoy tienes:</label>";
        echo "<input type=\"text\" value=\"$lleva_total / $porce_rend %AA\" readonly />";
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