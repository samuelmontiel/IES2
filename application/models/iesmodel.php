<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Iesmodel extends CI_Model {
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
           
     }
 //************************************************ FUNCIONES DE INICIO Y CERRAR SESION *********************************
     
	public function login($usuario,$password){
		//select *from usuarios where usuario=$usuario and password=$password;
		return $this->db->where('usuario',$usuario)
								->where('password',$password)
								->get('usuarios')
								->row();
	}
}