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
    $dolor_se_corre = 'Se Corre';
    $dolor_en_ano = 'En Ano';
    $pasaran_cuchillo_si = 'Si';
    $pasaran_cuchillo_no = 'No';
    $dificultad_evacuar_si = 'Si';
    $dificultad_evacuar_no = 'No';
    $nota_dolor = '';
    $sangra_ano_si = 'Si';
    $sangra_ano_no = 'No';
    $rojo_vivo = 'Rojo Vivo';
    $color_vinoso = 'Color Vinoso';
    $sangrado_cualquier_momento = 'Cualquier Momento';
    $sangrado_al_evacuar = 'Al Evacuar';
    $sangrado_papel = 'En el Papel';
    $sangrado_inodoro = 'Gotea en el Inodoro';
    $aspirina_si = 'Si';
    $aspirinas_no = 'No';
    $salio_pus = 'Pus';
    $salio_moco = 'Moco';
    $fiebre_si = 'Si';
    $fiebre_no = 'No';
    $bulto_ano_si = 'Si';
    $bulto_ano_no = 'No';
    $bulto_menor_un = 'Menor a 1 cm';
    $bulto_mayor_un = 'Mayor a 1 cm';
    $bulto_duele_si = 'Si';
    $bulto_duele_no = 'No';
    $bulto_azulado_si = 'Si';
    $bulto_azulado_no = 'No';
    $picazon_si = 'Si';
    $picazon_no = 'No';
    $picazon_alrededor_ano_si = 'Si';
    $picazon_alrededor_ano_no = 'No';
    $verrugas_ano_si = 'Si';
    $verrugas_ano_no = 'No';
    $tratamiento_previo_consulta = '';
    $extra_cuestionario = '';
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
                				    
                				    <input type="checkbox" name="dolor_se_corre" value="<?php echo $dolor_se_corre; ?>"/> Se Corre <br>
                				    <input type="checkbox" name"dolor_en_ano" value"<?php echo $dolor_en_ano; ?>"/>En Ano <br>
                				    <br>
                				
                				    <p class="pformulario"><label>¿Es como si le pasaran un cuchillo por el ano? </label></p>
                
                                    <input type="checkbox" name="pasaran_cuchillo_si" value="<?php echo $pasaran_cuchillo_si; ?>"/> Si <br>
                                    <input type="checkbox" name"pasaran_cuchillo_no" value"<?php echo $pasaran_cuchillo_no; ?>"/> No <br>
                                    <br>
                				   
                				    <p class="pformulario"><label>¿Tiene dificultad para evacuar? </label></p>
                
                                    <input type="checkbox" name="dificultad_evacuar_si" value="<?php echo $dificultad_evacuar_si; ?>"/> Si <br>
                                    <input type="checkbox" name"dificultad_evacuar_no" value"<?php echo $dificultad_evacuar_no; ?>"/> No <br>
                                    <br>
                                    
                                     <p class="pformulario"><label>PONGALE NOTA A SU DOLOR: 0 NADA – 10 INTOLERABLE </label></p>
                
                                    <input type="text" name="nota_dolor" value="<?php echo $nota_dolor; ?>"/><br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Sangra por el ano? </label></p>
                
                                    <input type="checkbox" name="sangra_ano_si" value="<?php echo $sangra_ano_si; ?>"/> Si <br>
                                    <input type="checkbox" name"sangra_ano_no" value"<?php echo $sangra_ano_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿La sangre es Rojo Vivo o Color Vino? </label></p>
                
                                    <input type="checkbox" name="rojo_vivo" value="<?php echo $rojo_vivo; ?>"/> Rojo Vivo <br>
                                    <input type="checkbox" name"color_vinoso" value"<?php echo $color_vinoso; ?>"/> Color Vinoso <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿El Sangrado se da en cualquier momento del dia o solo al evacuar? </label></p>
                
                                    <input type="checkbox" name="sangrado_cualquier_momento" value="<?php echo $sangrado_cualquier_momento; ?>"/> Cualquier Momento <br>
                                    <input type="checkbox" name"sangrado_al_evacuar" value"<?php echo $sangrado_al_evacuar; ?>"/> Al Evacuar <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿El Sangrado es sobre el papel al higienizarse o gotea en el inodoro? </label></p>
                
                                    <input type="checkbox" name="sangrado_papel" value="<?php echo $sangrado_papel; ?>"/> En el Papel <br>
                                    <input type="checkbox" name"sangrado_inodoro" value"<?php echo $sangrado_inodoro; ?>"/> Gotea en el Inodoro <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Toma aspirinas o algun anticoagulante? </label></p>
                
                                    <input type="checkbox" name="aspirinas_si" value="<?php echo $aspirina_si; ?>"/> Si <br>
                                    <input type="checkbox" name"aspirinas_no" value"<?php echo $aspirinas_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Salio pus o moco por el Ano? </label></p>
                
                                    <input type="checkbox" name="salio_pus" value="<?php echo $salio_pus; ?>"/> Pus <br>
                                    <input type="checkbox" name"salio_moco" value"<?php echo $salio_moco; ?>"/> Moco <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Tuvo Fiebre? </label></p>
                
                                    <input type="checkbox" name="fiebre_si" value="<?php echo $fiebre_si; ?>"/> Si <br>
                                    <input type="checkbox" name"fiebre_no" value"<?php echo $fiebre_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Aparecio algun bulto en el ano? </label></p>
                
                                    <input type="checkbox" name="bulto_ano_si" value="<?php echo $bulto_ano_si; ?>"/> Si <br>
                                    <input type="checkbox" name"bulto_ano_no" value"<?php echo $bulto_ano_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Es muy grande el bulto o como si fuera una uva? </label></p>
                
                                    <input type="checkbox" name="bulto_menor_un" value="<?php echo $bulto_menor_un; ?>"/> Menor a 1 cm <br>
                                    <input type="checkbox" name"bulto_mayor_un" value"<?php echo $bulto_mayor_un; ?>"/> Mayor a 1 cm <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Si se toca el bulto le duele? </label></p>
                
                                    <input type="checkbox" name="bulto_duele_si" value="<?php echo $bulto_duele_si; ?>"/> Si <br>
                                    <input type="checkbox" name"bulto_duele_no" value"<?php echo $bulto_duele_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿El bulto es de color azulado? </label></p>
                
                                    <input type="checkbox" name="bulto_azulado_si" value="<?php echo $bulto_azulado_si; ?>"/> Si <br>
                                    <input type="checkbox" name"bulto_azulado_no" value"<?php echo $bulto_azulado_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Tiene picazon anal? </label></p>
                
                                    <input type="checkbox" name="picazon_si" value="<?php echo $picazon_si; ?>"/> Si <br>
                                    <input type="checkbox" name"picazon_no" value"<?php echo $picazon_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿La picazon se extiende a la zona alrededor del ano? </label></p>
                
                                    <input type="checkbox" name="picazon_alrededor_ano_si" value="<?php echo $picazon_alrededor_ano_si; ?>"/> Si <br>
                                    <input type="checkbox" name"picazon_alrededor_ano_no" value"<?php echo $picazon_alrededor_ano_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Le salieron Verrugas en el ano? </label></p>
                
                                    <input type="checkbox" name="verrugas_ano_si" value="<?php echo $verrugas_ano_si; ?>"/> Si <br>
                                    <input type="checkbox" name"verrugas_ano_no" value"<?php echo $verrugas_ano_no; ?>"/> No <br>
                                    <br>
                                    
                                    <p class="pformulario"><label>¿Hizo algun tratamiento previo a la consulta que le haya sido efectivo antes? ¿Cual? </label></p>
                
                                    <textarea type="text" name="tratamiento_previo_consulta" value="<?php echo $tratamiento_previo_consulta; ?>"/></textarea><br>
                                    <br>
                                    
                                    <p class="pformulario"><label>POR FAVOR, EN EL SIGUIENTE ESPACIO ESCRIBA LO QUE CONSIDERE PUEDA SUMAR AL CUESTIONARIO ANTERIOR. </label></p>
                
                                    <textarea type="text" name="extra_cuestionario" value="<?php echo $extra_cuestionario; ?>"/></textarea><br>
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
