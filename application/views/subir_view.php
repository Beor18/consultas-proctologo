<?php 
if( isset($persona_actualizar) ){
    $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
    $nombre = $persona_actualizar->nombre;
    $edad = $persona_actualizar->edad;
    $email = $persona_actualizar->email;
    $pais = $persona_actualizar->pais;        
    $accion = 'actualizar';
}
else{
    $id = '';
    $nombre = '';
    $dni = '';
    $nacimiento = '';
    $sexo = '';
    $preguntauno = '';
    $preguntados = 'si';
    $preguntatres = 'no';
    $tiene_dolor_si = 'si';
    $tiene_dolor_no = 'no';
    $dolor_menos_una_semana = 'MENOS DE 1 SEMANA';
    $dolor_mas_una_semana = 'MAS DE 1 SEMANA';
    $dolor_permanente = 'Permanente';
    $dolor_intermitente = 'Intermitente';
    $userfile = '';
    $userfile2 = '';
    $userfile3 = '';
    $accion = 'subir';
}
?>


 <div id="titulogris" class="" style="width: 100% !important; margin: 0 auto !important; margin-bottom: 10px !important;">
        <div class="cabcontenidoind">
        </div>
        <div class="zonainteriorind">
            <h1>Consulte un Proctólogo</h1>
        </div>
        <div class="piecontenidoind">
        </div>
    </div>

<section id="parrafo">

    <div class="contenidoformulario">
        <div id="formularios">
            <div id="dataformulario">
                <div class="telpc">
                    <p style="text-align: left;">
                        Para comunicarse con <strong>PROCTOLOGO ONLINE</strong> puede hacerlo completando el siguiente formulario. Le responderemos a la brevedad.</p>
                    <p style="text-align: left;">
                        <img alt="" src="http://www.actualizarmiweb.com/sites/proctologo-online-com/publico/image/contacto.jpg" style="width: 300px; height: 199px;"></p>
                </div>

            </div>

            <div id="inputformulario">
                <form action="<?php echo base_url(); ?>index.php/subir_controller/<?php echo $accion; ?>" method="post" enctype="multipart/form-data">

                	<p class="pformulario"><label>Nombre y apellido:</label> </p>
                                    
                                    <input class="inputtxt" type="text" name="nombre" value="<?php echo $nombre; ?>" required />
                                    <br>
                            		<p class="pformulario"><label>DNI:</label></p>
                                    
                                    <input type="text" name="dni" value="<?php echo $dni; ?>" required />
                            		<br>
                                    <p class="pformulario"><label>Fecha de Nacimiento:</label></p>
                                    
                                    <input type="text" name="nacimiento" value="<?php echo $nacimiento; ?>" />
                            		<br>
                                    <p class="pformulario"><label>Sexo:</label></p>
                                    
                                    <input type="text" name="sexo" value="<?php echo $sexo; ?>" />
                                    <br>
                                    <p class="pformulario"><label>¿Tiene alguna Enfermedad conocida? ¿Cual?:</label></p>
                                    
                                    <textarea type="text" name="preguntauno" value="<?php echo $preguntauno; ?>" /></textarea>
                                    <br>
                                    <p class="pformulario"><label>¿Toma alguna medicación?</label></p>
                                    
                                    <input type="checkbox" name="preguntados" value="<?php echo $preguntados; ?>"/> Si<br>
                                    <input type="checkbox" name="preguntatres" value="<?php echo $preguntatres; ?>"/> No<br>
                                    <br>

                                    <p class="pformulario"><label>¿Tiene Dolor?</label></p>
                                    
                                    <input type="checkbox" name="tiene_dolor_si" value="<?php echo $tiene_dolor_si; ?>"/> Si<br>
                                    <input type="checkbox" name="tiene_dolor_no" value="<?php echo $tiene_dolor_no; ?>"/> No<br>
                                    <br>

                                    <p class="pformulario"><label>¿Hace cuanto comenzó con el dolor?</label></p>
                                    
                                    <input type="checkbox" name="dolor_menos_una_semana" value="<?php echo $dolor_menos_una_semana; ?>"/> Menos de 1 Semana <br>
                                    <input type="checkbox" name="dolor_mas_una_semana" value="<?php echo $dolor_mas_una_semana; ?>"/> Más de 1 Semana<br>
                                    <br>


                                    <p class="pformulario"><label>¿El dolor es Permanente o Intermitente?</label></p>
                                    
                                    <input type="checkbox" name="dolor_permanente" value="<?php echo $dolor_permanente; ?>"/> Permanente <br>
                                    <input type="checkbox" name="dolor_intermitente" value="<?php echo $dolor_intermitente; ?>"/> Intermitente<br>
                                    <br>
                                   
                				    <!--Nuevos campos falta agregar variables 08/06/2017 Fer Lopez --> 
                				    <p class="pformulario"><label>¿El dolor se corre hacia otra region o es solo el ano? </label></p>
                				    
                				    <input type="checkbox" name="" value=""/> Se Corre <br>
                				    <input type="checkbox" name"" value""/>En Ano <br>
                				    <br>
                				
                				    <p class="pformulario"><label>¿Es como si le pasaran un cuchillo por el ano? </label></p>
                
                                    <input type="checkbox" name="" value=""/> Si <br>
                                    <input type="checkbox" name"" value""/> No <br>
                                    <br>
                				   
                				    <p class="pformulario"><label>¿Tiene dificultad para evacuar? </label></p>
                
                                    <input type="checkbox" name="" value=""/> Si <br>
                                    <input type="checkbox" name"" value""/> No <br>
                                    <br>
                                    
                                     <p class="pformulario"><label>PONGALE NOTA A SU DOLOR: 0 NADA – 10 INTOLERABLE </label></p>
                
                                    <input type="text" name="" value=""/><br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Sangra por el anor? </label></p>
                
                                    <input type="checkbox" name="" value=""/> Si <br>
                                    <input type="checkbox" name"" value""/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿La sangre es Rojo Vivo o Color Vino? </label></p>
                
                                    <input type="checkbox" name="" value=""/> Rojo Vivo <br>
                                    <input type="checkbox" name"" value""/> Color Vinoso <br>
                                    <br>


                                        <!--El name del campo tiene que ser si o si "userfile"-->
                                	<p class="pformulario"><label>Subir un fichero (Máximo 3 fotos):</label></p> 
                                    <input type="file" name="userfile" value="<?php echo $userfile; ?>"/>
                                    <br></br>
                                    <input type="file" name="userfile2" value="<?php echo $userfile2; ?>"/>
                                    <br></br>
                                    <input type="file" name="userfile3" value="<?php echo $userfile3; ?>"/>
                                    <br></br>
                                    

                                    <div id="botoneraform"><input type="submit" name="guardar" value="Enviar Consulta" /></div>
                </form>
                </div>
            </div>
        </div>
</seccion>
<?php
if(isset($error)){
    echo "<strong style='color:red;'>".$error."</strong>";
}
 
if(isset($img)){
    echo "<strong style='color:green;'>".$img["orig_name"]." subido satisfactoriamente </strong>";
}
?>
