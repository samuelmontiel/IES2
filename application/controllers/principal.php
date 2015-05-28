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
	}
	 public function index()
	 {
	 	
	 	$this->load->view('templateInfo');
	 }

	
	
	public function alumnoDateInst()
	{
		$data['contenidoAlumno'] = 'alumnoDateInst.php';
		$this->load->view('templateAlumno',$data);
		
	}
	public function alumnoDatePers()
	{
		$data['contenidoAlumno'] = 'alumnoDatePers.php';
		$this->load->view('templateAlumno',$data);
		
	}
	public function calificaciones()
	{
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
								
								$this->session->set_userdata('Nombre',$usuario->Nombre);
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
	
}
