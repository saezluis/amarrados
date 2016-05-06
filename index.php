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
			
			
			/*
			$('#name').bind("keypress", function(e) {
				if (e.keyCode == 13) {
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
					//alert("Enter pressed");
					//return false; // prevent the button click from happening
				}
			});
			*/
			
			$("#name").bind("keypress", {}, keypressInBox);

			function keypressInBox(e) {
				var code = (e.keyCode ? e.keyCode : e.which);
				if (code == 13) { //Enter keycode                        
					e.preventDefault();
					
					var name=$("#name").val();
					
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
					//$("yourFormId").submit();
				}
			};
			
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
			
			$("#button_premio").click(function(){

					var rut = $("#var_rut").val();
					//var message=$("#message").val();

					$.ajax({
					  type:"post",
					  url:"procesar-premio.php",
					  //data:"name="+name+"&message="+message+"&action=addcomment",
					  data:"rut="+rut,
					  success:function(data){
						$("#comment3").html(data);
						//showComment();
						  
					  }

					});

			});
			
			
			$("#var_rut").bind("keypress", {}, keypressInBoxPrem);

			function keypressInBoxPrem(e) {
				var codeP = (e.keyCode ? e.keyCode : e.which);
				if (codeP == 13) { //Enter keycode                        
					e.preventDefault();
					
					var rut=$("#var_rut").val();
					
					$.ajax({
					  type:"post",
					  url:"procesar-premio.php",
					  //data:"name="+name+"&message="+message+"&action=addcomment",
					  data:"rut="+rut,
					  success:function(data){
						$("#comment3").html(data);
						//showComment();
						  
					  }

					});
					//$("yourFormId").submit();
				}
			};
			
			
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
            <section class="ed-container solomobil">
              <div class="ed-item base-50">
                <div class="logoUp">
                  <img src="img/zuko.svg" alt="">
                </div>
              </div>
              <div class="ed-item base-50">
                <div class="logoUp">
                  <img src="img/livean.svg" alt="">
                </div>
              </div>
            </section>
            <div class="logo no-logo"><a href="index.html" title="Amarrados" alt="Amarrados"><img src="img/logo.png" alt=""/></a></div>
<!--             <div class="semana">
              <p>Vamos en la semana nº1</p>
            </div> -->
            <div class="navegacion">
              <div class="nav-palomita">
                <img name="palomita" src="img/palomita.png" width="416" height="507" id="palomita" usemap="#m_palomita" alt="" />
                  <map name="m_palomita" id="m_palomita">
                    <area shape="rect" coords="137,312,312,353" href="#contacto" data-effect="mfp-move-from-top" alt="" class="open-popup-link" />
                    <area shape="rect" coords="131,255,310,299" href="#consulta" data-effect="mfp-move-from-top" alt="" class="open-popup-link" />
                    <area shape="rect" coords="134,180,298,244" href="#test-popup" data-effect="mfp-move-from-top" alt="" class="open-popup-link" />
                    <!-- <area shape="rect" coords="154,124,272,164" href="javascript:;" alt="" /> -->
                  </map>
                  </div>
                  <div class="bille-verde">
                    <img src="img/billete-verde.png" alt="">
                  </div>
                  <div class="bille-azul">
                    <img src="img/billete-azul.png" alt="">
                  </div>
            </div>
            <div class="claim-foot-mobile"><img src="img/desata.png" alt=""/></div>
            <div class="claim-foot"><img src="img/ima-foot.png" alt=""/></div>
          </div>
        </div>
      </div>

      <div class="ed-container total no-padding tabletWeb ta">
          <div class="ed-item base-100 tablet-50">
            <div class="linksWeb">
              <a class="linksWeb__go1" href="http://www.tmluc.cl/" target="_blank"><img src="img/tmluc.jpg" alt="Ir al sitio de TMLUC"></a>
              <a class="linksWeb__go2" href="http://www.gruponutresa.com/" target="_blank"><img src="img/nutresa.png" alt="Ir al sitio de Nutresa"></a>
            </div><!--.linksWeb-->
          </div>
          <div class="ed-item base-100 tablet-50">
            <div class="rrsss">
                <h3>Síguenos en facebook:</h3>
                <a class="facebook" href="https://www.facebook.com/zukochile" target="_blank">
                  <span class="fz"><img src="img/face.png" alt=""></span>
                </a>
                <a class="facebookL" href="https://www.facebook.com/LiveanComunidad" target="_blank">
                  <span class="fl"><img src="img/facel.png" alt=""></span>
                </a>
            </div><!--.rrss-->
            </div><!--.ed-item-->
      </div><!--.ed-container-->

    </div><!--.bg-->
	
	
    <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
      <div class="box-light">
        <div class="pres-log"><img src="img/logo.png" alt=""/></div>
        <div class="amarritas"><img src="img/amarras.png" alt=""/></div>
        <h1>Premios</h1>  
        <form id="revisorpremios">
              <fieldset>
                <label>para revisar tu Meta, ingresa tu Codigo</label>
                <input type="number" name="name" id="var_rut" />
                <input type="button" value="Revisar" id="button_premio"/>
              </fieldset>
              <fieldset class="ocultar"> 
                <div id="info" />
                <span id="comment3"></span>
              </fieldset>
        </form>        
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
			<label for="cuentame"> Cuéntanos</label>
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
                <label>Para revisar tu avance, ingresa tu Codigo</label>
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