<?php
class Subir_controller extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
    }
     
   public function index(){ 
        $this->load->model('subir_model');
        //$this->load->view('subir_view');
        $this->load->view('main_template');
   }
    
   public function subir(){


      //COMIENZO Multiples archivos para subir
      if (!empty($_FILES['userfile']['name']))
        {
           //Ruta donde se guardan los ficheros
            $config['upload_path'] = 'application/views/subidas/';
            
           //Tipos de ficheros permitidos
            $config['allowed_types'] = 'gif|jpg|png';
             
           //Se pueden configurar aun mas parámetros.
           //Cargamos la librería de subida y le pasamos la configuración 
            $this->load->library('upload', $config);
     
            if(!$this->upload->do_upload('userfile')){
                /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
                    $error=array('error' => $this->upload->display_errors());
                    $this->load->view('subir_view', $error);
            }else{
                //Datos del fichero subido
                $datos=$this->upload->data();
                $userfile = $datos['file_name'];
                $ruta = $datos['file_path'].$userfile;
     
                // Podemos acceder a todas las propiedades del fichero subido 
                // $datos["img"]["file_name"]);
     
                //Cargamos la vista y le pasamos los datos
                $this->load->view('subir_view', $datos);
            }

          }


          if (!empty($_FILES['userfile2']['name']))
        {
           //Ruta donde se guardan los ficheros
            $config['upload_path'] = 'application/views/subidas/';
            
           //Tipos de ficheros permitidos
            $config['allowed_types'] = 'gif|jpg|png';
             
           //Se pueden configurar aun mas parámetros.
           //Cargamos la librería de subida y le pasamos la configuración 
            $this->load->library('upload', $config);
     
            if(!$this->upload->do_upload('userfile2')){
                /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
                    $error=array('error' => $this->upload->display_errors());
                    $this->load->view('subir_view', $error);
            }else{
                //Datos del fichero subido
                $datos=$this->upload->data();
                $userfile2 = $datos['file_name'];
                $rutados = $datos['file_path'].$userfile2;
                
     
                // Podemos acceder a todas las propiedades del fichero subido 
                // $datos["img"]["file_name"]);
     
                //Cargamos la vista y le pasamos los datos
                $this->load->view('subir_view', $datos);
            }

          }


          if (!empty($_FILES['userfile3']['name']))
        {
           //Ruta donde se guardan los ficheros
            $config['upload_path'] = 'application/views/subidas/';
            
           //Tipos de ficheros permitidos
            $config['allowed_types'] = 'gif|jpg|png';
             
           //Se pueden configurar aun mas parámetros.
           //Cargamos la librería de subida y le pasamos la configuración 
            $this->load->library('upload', $config);
     
            if(!$this->upload->do_upload('userfile3')){
                /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
                    $error=array('error' => $this->upload->display_errors());
                    $this->load->view('subir_view', $error);
            }else{
                //Datos del fichero subido
                $datos=$this->upload->data();
                $userfile3 = $datos['file_name'];
                $rutatres = $datos['file_path'].$userfile3;
                
     
                // Podemos acceder a todas las propiedades del fichero subido 
                // $datos["img"]["file_name"]);
     
                //Cargamos la vista y le pasamos los datos
                $this->load->view('subir_view', $datos);
            }

          }

          //FIN Multiples archivos para subir

        $userfile = "http://consulta.proctologo-online.com/application/views/subidas/".$userfile;
        $userfile2 = "http://consulta.proctologo-online.com/application/views/subidas/".$userfile2;
        $userfile3 = "http://consulta.proctologo-online.com/application/views/subidas/".$userfile3;
        
        $buscar = array(
            'nombre' => $this->input->post('nombre'),
            'dni' => $this->input->post('dni'),
            'nacimiento' => $this->input->post('nacimiento'),
            'sexo' => $this->input->post('sexo'),
            'preguntauno' => $this->input->post('preguntauno'),
            'preguntados' => $this->input->post('preguntados'),
            'preguntatres' => $this->input->post('preguntatres'),
            'tiene_dolor_si' => $this->input->post('tiene_dolor_si'),
            'tiene_dolor_no' => $this->input->post('tiene_dolor_no'),
            'dolor_menos_una_semana' => $this->input->post('dolor_menos_una_semana'),
            'dolor_mas_una_semana' => $this->input->post('dolor_mas_una_semana'),
            'dolor_permanente' => $this->input->post('dolor_permanente'),
            'dolor_intermitente' => $this->input->post('dolor_intermitente'),
            '$dolor_se_corre' => $this->input->post('dolor_se_corre'),
            '$dolor_en_ano' => $this->input->post('dolor_en_ano'),
            '$pasaran_cuchillo_si' => $this->input->post('pasaran_cuchillo_si'),
            '$pasaran_cuchillo_no' => $this->input->post('pasaran_cuchillo_no'),
            '$dificultad_evacuar_si' => $this->input->post('dificultad_evacuar_si'),
            '$dificultad_evacuar_no' => $this->input->post('dificultad_evacuar_no'),
            '$nota_dolor' => $this->input->post('nota_dolor'),
            '$sangra_ano_si' => $this->input->post('sangra_ano_si'),
            '$sangra_ano_no' => $this->input->post('sangra_ano_no'),
            '$rojo_vivo' => $this->input->post('rojo_vivo'),
            '$color_vinoso' => $this->input->post('color_vinoso'),
            '$sangrado_cualquier_momento' => $this->input->post('sangrado_cualquier_momento'),
            '$sangrado_al_evacuar' => $this->input->post('sangrado_al_evacuar'),
            '$sangrado_papel' => $this->input->post('sangrado_papel'),
            '$sangrado_inodoro' => $this->input->post('sangrado_inodoro'),
            '$aspirina_si' => $this->input->post('aspirina_si'),
            '$aspirina_no' => $this->input->post('aspirina_no'),
            '$salio_pus' => $this->input->post('salio_pus'),
            '$salio_moco' => $this->input->post('salio_moco'),
            '$fiebre_si' => $this->input->post('fiebre_si'),
            '$fiebre_no' => $this->input->post('fiebre_no'),
            '$bulto_ano_si' => $this->input->post('bulto_ano_si'),
            '$bulto_ano_no' => $this->input->post('bulto_ano_no'),
            '$bulto_menor_un' => $this->input->post('bulto_menor_un'),
            'fotos' => $userfile,
            'fotosdos' => $userfile2,
            'fotostres' => $userfile3
            );


          // Envio de formulario por email

          //Indicamos el protocolo a utilizar
          $config['protocol'] = 'smtp';
         
         //El servidor de correo que utilizaremos
          $config["smtp_host"] = 'mail.proctologo-online.com';
           
         //Nuestro usuario
          $config["smtp_user"] = 'tecnica@proctologo-online.com';
           
         //Nuestra contraseña
          $config["smtp_pass"] = 'romanos18';    
           
         //El puerto que utilizará el servidor smtp
          $config["smtp_port"] = '25';
          
         //El juego de caracteres a utilizar
          $config['charset'] = 'utf-8';
   
         //Permitimos que se puedan cortar palabras
          $config['wordwrap'] = FALSE;
           
         //El email debe ser valido  
         $config['validate'] = FALSE;

         $config['mailtype'] = 'html';

         
          
        //Establecemos esta configuración
          $this->email->initialize($config);
          
   
        //Ponemos la dirección de correo que enviará el email y un nombre
          $this->email->from('tecnica@proctologo-online.com', 'Fernando Lopez');
           
        /*
         * Ponemos el o los destinatarios para los que va el email
         * en este caso al ser un formulario de contacto te lo enviarás a ti
         * mismo
         */
          $this->email->to('tecnica@proctologo-online.com', 'Víctor Robles');
           
        //Definimos el asunto del mensaje
          $this->email->subject($this->input->post("Consulta Online"));

           
        //Definimos el mensaje a enviar
          $htmlContent = "<h4><strong>Nombre:</strong></h4> ".$this->input->post("nombre");
          $htmlContent .= '<br>';
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>Dni:</strong></h4> ".$this->input->post("dni");
          $htmlContent .= '<br>';
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>Nacimiento:</strong></h4> ".$this->input->post("nacimiento");
          $htmlContent .= "<br>";
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>Sexo:</strong></h4> ".$this->input->post("sexo");
          $htmlContent .= "<br>";
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>¿Tiene alguna Enfermedad conocida? ¿Cual?:</strong></h4> ".$this->input->post("preguntauno");
          $htmlContent .= "<br>";
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>¿Toma alguna medicación?: </strong></h4>";
          $htmlContent .= '<br>';
          $htmlContent .= "<strong></strong>".$this->input->post("preguntados");
          $htmlContent .= "<br>";
          $htmlContent .= "<strong></strong>".$this->input->post("preguntatres");
          $htmlContent .= "<br>";
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>¿Tiene Dolor?: </strong></h4>";
          $htmlContent .= "<br>";
          $htmlContent .= "<strong></strong>".$this->input->post("tiene_dolor_si");
          $htmlContent .= "<br>";
          $htmlContent .= "<strong></strong>".$this->input->post("tiene_dolor_no");
          $htmlContent .= "<br>";
          $htmlContent .= '<br>';
          $htmlContent .= "<h4><strong>¿Hace cuanto comenzó con el dolor?: </strong></h4>";
          $htmlContent .= "<br>";
          $htmlContent .= "<strong></strong>".$this->input->post("dolor_menos_una_semana");
          $htmlContent .= "<br>";
          $htmlContent .= "<strong></strong>".$this->input->post("dolor_mas_una_semana");

          $this->email->message($htmlContent);
          $this->email->attach($ruta);
          $this->email->attach($rutados);
          $this->email->attach($rutatres);
          
           
          //Enviamos el email y si se produce bien o mal que avise con una flasdata
          if($this->email->send()){
              $this->session->set_flashdata('envio', 'Email enviado correctamente');
          }else{
              $this->session->set_flashdata('envio', 'No se a enviado el email');
          }
           
          //redirect(base_url("contacto"));
      

        $this->load->model('subir_model');
        if ( $this->subir_model->insertar_persona($buscar) )
          redirect('enviado');   
    }   
}
?>