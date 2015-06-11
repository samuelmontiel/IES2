	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		 $this->load->model('iesmodel');
		$this->load->library('form_validation');
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->helper('download');
		$this->load->library('session');
		$this->load->library('email','','correo');
		$this->load->library('html2pdf');
	}
	 public function index()
	 {
	 	
	 	$this->load->view('templateInfo');
	 }

	
	
	public function alumnoDateInst()
	{
		$alumno = $this->iesmodel->accesoTalumno($this->session->userdata('id_usuario'));
		$data['registro']= $alumno;


		$licenciatura = $this->iesmodel->accesoTlicenciatura($this->session->userdata('id_usuario'));
		$data['licenciatura']= $licenciatura;

		$data['contenidoAlumno'] = 'alumnoDateInst.php';
		$this->load->view('templateAlumno',$data);
		
	}
	public function alumnoDatePers()
	{
		$alumno = $this->iesmodel->accesoTalumno($this->session->userdata('id_usuario'));
		$data['registro']= $alumno;

		$data['contenidoAlumno'] = 'alumnoDatePers.php';
		$this->load->view('templateAlumno',$data);
		
	}
	public function calificaciones()
	{
		$alumno = $this->iesmodel->accesoTalumno($this->session->userdata('id_usuario'));
		$data['registro']= $alumno;
		;

		$materias = $this->iesmodel->accesoTmaterias($this->session->userdata('id_usuario'));
		$data['materias']= $materias;
	
		$data['contenidoAlumno'] = 'calificaciones.php';
		$this->load->view('templateAlumno',$data);
		
	}
///----------------------------------------FUNCINES DE ADMINISTRADOR-------------------------------------------------------
	public function administrador()
	{
		$data['contenidoAdmin'] = 'adminDatePers.php';
		$this->load->view('templateAdmin',$data);
		
	}
	public function AgregarEmpleado()
	{
		$data['contenidoAdmin'] = 'AgregarEmpleado.php';
		$this->load->view('templateAdmin',$data);
		
	}
	public function verEmpleados()
	{

		$data['contenidoAdmin'] = 'verEmpleados.php';
		$this->load->view('templateAdmin',$data);
		
	}
	// public function login()
	// {
		
	// 	$data['contenidoAlumno'] = 'alumnoDateInst.php';
	// 	$this->load->view('templateAlumno',$data);
		
	// }

	public function login(){

				if($this->input->post()){
				$usuario= $this->iesmodel->login($this->input->post('usuario'),($this->input->post('password')));
					if(!is_object($usuario)){
						//contraseña y/o usuario invalido
						//$contra = sha1($this->input->post('password')); exit($contra);
						$this->session->sess_destroy();
						redirect('principal/index');						

					}else{
							
								//Login correcto
								//$this->session->set_userdata('id',$usuario->id_usuario);
								
								$this->session->set_userdata('Nombre',$usuario->usuario);
								$this->session->set_userdata('id_usuario',$usuario->idusuario);
								redirect('principal/alumnoDateInst');
								
								}
					
				}	

				else{
								$this->session->sess_destroy();
								redirect('principal/index');
							}		
	}//fin login
	public function logout(){
		$this->session->sess_destroy();
		 redirect('principal/index');
	}
//-----------------------------------------------Funciones para crear pdf-----------------------------------------
 private function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }

     public function calif()
    {
    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
 
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        
        //establecemos el nombre del archivo
        $this->html2pdf->filename('calificaciones.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
       
        //datos que queremos enviar a la vista, lo mismo de siempre
        $alumno = $this->iesmodel->accesoTalumno($this->input->get('id'));
		$data['registro']= $alumno;
		$materias = $this->iesmodel->accesoTmaterias($this->input->get('id'));
		$data['materias']= $materias;
	
		
		
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('pdf', $data, true)));
        
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    }

        //esta función muestra el pdf en el navegador siempre que existan
    //tanto la carpeta como el archivo pdf
    public function show()
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = "calificaciones.pdf"; 
            $route = base_url("files/pdfs/calificaciones.pdf"); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
    } 

	
}
