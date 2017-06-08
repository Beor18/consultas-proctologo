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
    $fotos = 'userFile';
    $accion = 'insertar';
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
            <?php echo form_open_multipart('subir/insertar');?>
            	
                    <?php echo $id; ?>
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
                    <p class="pformulario"><label>¿Hace cuanto comenza con dolor?</label></p>
                    
                    <input type="checkbox" name="preguntados" value="<?php echo $preguntados; ?>"/> MENOS DE 1 SEMANA<br>
                    <input type="checkbox" name="preguntatres" value="<?php echo $preguntatres; ?>"/> MAS DE 1 SEMANA<br>
                    <br>
                    <p class="pformulario"><label>Subir Fotos (Máximo 3)</label></p>
                    <p></p>
                    <input type="file" name="userFile" size="20" value="<?php echo $fotos; ?>" />
                    <br>
                    <input type="file" name="userFile" size="20" value="<?php echo $fotos; ?>" />
                    <br>
                    <input type="file" name="userFile" size="20" value="<?php echo $fotos; ?>" />

                    <p></p>
            		<p id="botoneraform"><input type="submit" name="guardar" value="Enviar Consulta" /></p>
            	</form>

            </div>
        </div>
    </div>

    </section>
</body>
