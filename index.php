<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>

	<script src="js/jquery.rwdImageMaps.js"></script>
	<script src="http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js"></script>
	<script src="js/scripts.js"></script>
	
    <title>Amarrados / Vendedor</title>
	
	<script type="text/javascript">
	   $(document).ready(function(){
	   
			$("#button").click(function(){

				  var name=$("#name").val();
				  //var message=$("#message").val();

				  $.ajax({
					  type:"post",
					  url:"process.php",
					  //data:"name="+name+"&message="+message+"&action=addcomment",
					  data:"name="+name+"&action=showcomment",
					  success:function(data){
						$("#comment").html(data);
						//showComment();
						  
					  }

				  });

			});
			
			$("#button2").click(function(){
				
				  /*
				  var nombre = $("#nombre").val();
				  var mail = $("#mail").val();
				  var cuentame = $("#cuentame").val();
				  
				  function showComment(){
						alert('hola');
					 }
				  */
				  
				  $("#myForm").validate({
						rules: {
                        "nombre": {
                            required: true,
                            //email: true
                        },  
                        "mail": {
                            required: true,
                            //minlength: 5
                        },
						"cuentame": {
                            required: true,
                            //minlength: 5
                        }						
                    },
						
					submitHandler: function() {
                        $.post('procesar-contacto.php', 
                        $('form#myForm').serialize() , 
                        function(data){
                            //alert(data.msg);
							$("#mensaje").html(data.msg);
							
							$("#nombre").val("");
							$("#mail").val("");
							$("#cuentame").val("");
							//showComment();
                        }, "json");
                    }
					/*	
					  $.ajax({
						  type:"post",
						  url:"procesar-contacto.php",
						  //data:"name="+name+"&message="+message+"&action=addcomment",
						  data:"nombre="+nombre+"&mail="+mail+"&cuentame="+cuentame,
						  success:function(data){
							$("#mensaje").html(data);
							//showComment();
							  
						  }

					});*/
					  
				  });
				  
				  

			});
			
	   });
    </script>
	
  </head>
  <body>
    <div class="bg">
      <div class="ed-container">
        <div class="ed-item web-100">
          <div class="please"><img src="img/gire.svg" alt="" class="resize"/>
            <p>Para una mejor experiencia gire su dispositivo en vertical</p>
          </div>
          <div class="wrap">
            <div class="logo no-logo"><a href="index.html" title="Amarrados" alt="Amarrados"><img src="img/logo.png" alt=""/></a></div>
            <div class="navegacion">
              <div class="nav-palomita"><img name="palomita" src="img/palomita.png" width="416" height="507" id="palomita" usemap="#m_palomita" alt=""/><map id="m_palomita" name="m_palomita">
                  <area shape="poly" coords="332,331,333,345,333,353,304,360,263,361,242,364,222,364,196,366,170,368,144,372,130,372,127,362,133,358,128,342,143,342,160,341,178,341,200,340,219,337,237,336,257,336,294,334,313,332,326,332,332,331" href="#consulta" data-effect="mfp-move-from-top" alt="" class="open-popup-link"/>
                  <area shape="poly" coords="300,274,316,309,293,316,276,315,251,316,240,319,212,321,193,320,167,320,151,322,138,323,140,314,145,307,147,292,156,285,170,286,186,286,201,286,214,285,230,283,254,282,268,281,290,279,300,274" href="#contacto" data-effect="mfp-move-from-top" alt="" class="open-popup-link"/>
                  <area shape="poly" coords="320,231,324,242,325,255,325,262,254,270,215,269,180,270,157,272,132,276,124,264,128,246,138,237,153,236,178,236,207,236,236,235,260,233,290,232,307,233,320,231" href="#ganadores" data-effect="mfp-move-from-top" alt="" class="open-popup-link"/>
                  <area shape="poly" coords="286,212,274,218,245,224,218,224,195,225,172,227,160,222,161,205,165,190,167,184,197,183,220,181,243,181,271,180,286,184,287,205,286,212" href="bases.html" alt=""/>
                  <area shape="poly" coords="294,170,234,176,175,180,139,178,133,158,137,140,155,137,172,138,186,139,199,139,210,138,227,138,236,137,246,137,257,137,268,137,286,136,294,170" href="#test-popup" data-effect="mfp-move-from-top" alt="" class="open-popup-link"/>
                  <area shape="poly" coords="153,88,148,129,194,132,233,131,276,126,283,112,264,90,225,80,153,88" href="#" alt=""/></map></div>
            </div>
            <div class="claim-foot"><img src="img/ima-foot.png" alt=""/></div>
          </div>
        </div>
      </div>
    </div>
    <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
      <div class="box-light">
        <div class="pres-log"><img src="img/logo.png" alt=""/></div>
        <div class="amarritas"><img src="img/amarras.png" alt=""/></div>
        <h1>Premios</h1>
        <ul class="data-premio">
          <li>Primer Lugar $ 250.000</li>
          <li>Segundo Lugar $50.000</li>
          <li>Tercer lugar $25.500</li>
        </ul>
        <div class="billete-l"><img src="img/billete-l.png" alt=""/></div>
      </div>
    </div>
    <div id="contacto" class="white-popup mfp-with-anim mfp-hide">
      <div class="box-light">
        <div class="pres-log"><img src="img/logo.png" alt=""/></div>
        <div class="amarritas"><img src="img/amarras.png" alt=""/></div>
        <h1>Contacto</h1>
        <p>Tienes alguna duda o consulta, <span>escríbenos</span></p>
        <form id="myForm" class="contacto">
			<label for="nombre">Tu nombre</label>
			<input type="text" name="nombre" id="nombre" required />
			<label for="mail">Tu mail</label>
			<input type="mail" name="mail" id="mail" required />
			<label for="cuentame"> cuéntanos</label>
			<textarea name="cuentame" id="cuentame" required ></textarea>
			<input type="submit" value="Enviar" id="button2" />
			<span id="mensaje"></span>
        </form>
        <div class="billete-l"><img src="img/billete-l.png" alt=""/></div>
      </div>
    </div>
    <div id="ganadores" class="white-popup mfp-with-anim mfp-hide">
      <div class="box-light">
        <div class="pres-log"><img src="img/logo.png" alt=""/></div>
        <h1>Ganadores</h1>
        <div class="ganadores">
          <table class="pure-table pure-table-horizontal">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Premio</th>
              </tr>
            </thead>
			<?php
				include_once 'config.php';
		
				$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
				$acentos = $conexion->query("SET NAMES 'utf8'");
				
				$registrosGanadores = mysqli_query($conexion, "SELECT * FROM ganadores") or die("Problemas con la conexión".mysqli_error($conexion));
				
				echo "<tbody>";
					while($reg=mysqli_fetch_array($registrosGanadores)){
						
						$nombre = $reg['nombre'];
						$fecha = $reg['fecha'];
						$premio = $reg['premio'];
						
						//$originalDate = "2010-03-21";
						$newDate = date("d/m/y", strtotime($fecha));
					
						echo "<tr>";
							echo "<td>$nombre</td>";
							echo "<td>$newDate</td>";
							echo "<td>$premio</td>";
						echo "</tr>";
						
					}
				echo "</tbody>";
			?>
          </table>
        </div>
      </div>
    </div>
    <div id="consulta" class="white-popup mfp-with-anim mfp-hide">
      <div class="box-light">
        <div class="pres-log"><img src="img/logo.png" alt=""/></div>
        <div class="amarritas"><img src="img/amarras.png" alt=""/></div>
        <h1>Ver mis avances</h1>		
		<form id="revisor">
          <fieldset>
            <label>para revisar tu avance, ingresa tu RUT</label>
            <input type="number" name="name" id="name" />
            <input type="button" value="Revisar" id="button"/>
          </fieldset>
          <fieldset class="ocultar"> 
            <div id="info" />
            <span id="comment"></span>
          </fieldset>
        </form>
        <div class="billete-l"><img src="img/billete-l.png" alt=""/></div>
      </div>
    </div>
  </body> 
</html>