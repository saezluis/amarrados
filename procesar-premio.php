<?php

	//$action=$_POST["action"];
	$rut=$_POST["rut"];
	
	include_once 'config.php';
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");	
	 
	$registrosPremio = mysqli_query($conexion, "SELECT * FROM vendedores WHERE rut = '$rut' ") or die("Problemas con el select de premio");
	
	if($regVend=mysqli_fetch_array($registrosPremio)){
		$perfil_vendedor = $regVend['perfil'];
	}
	
	$num_reg_premio = mysqli_num_rows($registrosPremio);
	
	if($num_reg_premio!=0){
	
	
		echo "<p class=\"mecanica\">Cumple tus metas de ventas y amárrate a increíbles premios en efectivo:</p>";
		echo "<a class=\"bases\" href=\"Bases_Legales.pdf\" target=\"_blank\">Descargar Bases</a>";
		
		if(@$perfil_vendedor=='vendedor'){
			
			echo "<table class=\"pure-table pure-table-horizontal\">";
            echo "<h2 style=\"color:#fff; text-align: center; font-size: 1.4em;\">Metas Vendedores</h2>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>Intervalos de objetivos:</th>";
                echo "<th>Premio:</th>";
             echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
              echo "<tr>";
                echo "<td>15% AA</td>";
                echo "<td>Giftcard de $80.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>16% al 25% AA</td>";
                echo "<td>Giftcard de $100.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>26% AA ó Más</td>";
                echo "<td>Giftcard de $130.000</td>";
              echo "</tr>";
            echo "</tbody>";
          echo "</table>";
		  
			/*
			echo "<div class=\"ed-container\">";
			  echo "<div class=\"cuadro\">";
				echo "<h3>Metas Vendedores</h3>";
				echo "<div class=\"box-table\">";
				  echo "<div class=\"tablaCuadro\">Intervalos de cumplimiento de META</div>";
				 echo "<div class=\"tablaCuadro\">Premio</div>";
				echo "</div>";
			  echo "</div><!--.cuadro-->";

			  echo "<div class=\"cuadro\">";
				echo "<div class=\"box-table\">";
				  echo "<div class=\"tablaCuadro\">";
				  echo "<span class=\"numbersT\">100%</span>";
				  echo "<span class=\"numbersT numbersTu\">101 - 110%</span>";
				  echo "<span class=\"numbersT numbersTd\">111% - +</span></div>";
				  echo "<div class=\"tablaCuadro\">";
					echo "<span class=\"numbersT\">Giftcard de $80.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $100.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $130.000</span>";
				  echo "</div>";
				echo "</div>";
			  echo "</div><!--.cuadro-->";
			  */
		}
		
		if(@$perfil_vendedor=='supervisor'){
			
			echo "<table class=\"pure-table pure-table-horizontal\">";
			echo "<h2 style=\"color:#fff; text-align: center; font-size: 1.4em;\">METAS SUPERVISORES</h2>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>Intervalos de objetivos:</th>";
                echo "<th>Premio:</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
              echo "<tr>";
                echo "<td>15% AA</td>";
                echo "<td>Giftcard de $120.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>16% al 25% AA</td>";
                echo "<td>Giftcard de $150.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>26% AA ó Más</td>";
                echo "<td>Giftcard de $200.000</td>";
              echo "</tr>";
            echo "</tbody>";
          echo "</table>";
			
			/*
			 echo "<div class=\"cuadro margen-top\">";
				echo "<h3>Metas Supervisores</h3>";
				echo "<div class=\"box-table\">";
				  echo "<div class=\"tablaCuadro\">Intervalos de cumplimiento de META</div>";
				  echo "<div class=\"tablaCuadro\">Premio</div>";
				echo "</div>";
			  echo "</div><!--.cuadro-->";

			 echo "<div class=\"cuadro\">";
				echo "<div class=\"box-table\">";
				  echo "<div class=\"tablaCuadro\">";
				  echo "<span class=\"numbersT\">100%</span>";
				  echo "<span class=\"numbersT\">101 - 110%</span>";
				  echo "<span class=\"numbersT\">111% - +</span></div>";
				  echo "<div class=\"tablaCuadro\">";
					echo "<span class=\"numbersT\">Giftcard de $120.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $150.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $200.000</span>";
				  echo "</div>";
				echo "</div>";
			  echo "</div><!--.cuadro-->";
			  */
		}
		
		if(@$perfil_vendedor=='gestor'){
		
		echo "<table class=\"pure-table pure-table-horizontal\">";
			echo "<h2 style=\"color:#fff; text-align: center; font-size: 1.4em;\">METAS GESTORES</h2>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>Intervalos de objetivos:</th>";
                echo "<th>Premio:</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
              echo "<tr>";
                echo "<td>15% AA</td>";
                echo "<td>Giftcard de $150.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>16% al 25% AA</td>";
                echo "<td>Giftcard de $200.000</td>";
              echo "</tr>";
              echo "<tr>";
                echo "<td>26% AA ó Más</td>";
                echo "<td>Giftcard de $250.000</td>";
             echo "</tr>";
            echo "</tbody>";
        echo "</table>";
			/*
			echo "<div class=\"cuadro margen-top\">";
				echo "<h3>Metas Gestores</h3>";
				echo "<div class=\"box-table\">";
				  echo "<div class=\"tablaCuadro\">Intervalos de cumplimiento de META</div>";
				  echo "<div class=\"tablaCuadro\">Premio</div>";
				echo "</div>";
			 echo "</div><!--.cuadro-->";

			  echo "<div class=\"cuadro\">";
				echo "<div class=\"box-table\">";
				 echo "<div class=\"tablaCuadro\">";
				  echo "<span class=\"numbersT\">100%</span>";
				  echo "<span class=\"numbersT\">101 - 110%</span>";
				  echo "<span class=\"numbersT\">111% - +</span></div>";
				  echo "<div class=\"tablaCuadro\">";
					echo "<span class=\"numbersT\">Giftcard de $150.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $200.000 </span>";
					echo "<span class=\"numbersT\">Giftcard de $250.000</span>";
				  echo "</div>";
				echo "</div>";
			 echo "</div><!--.cuadro-->";
			 */
		}
		
			 echo "<div class=\"billete-l\"><img src=\"img/billete-l.png\" alt=\"\"/></div>";
		 
	}else{
		echo "Rut no se encuentra registrado.";
	}

?>

