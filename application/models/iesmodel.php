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
	public function accesoTalumno($idalumno){
		$Query = $this->db->where('idalumno',$idalumno)
		->from('alumno')
		->get()
		->row();// Produce: SELECT * FROM mitabla
		return $Query;
	}

	public function accesoTlicenciatura($idlicenciatura){
		$Query = $this->db->where('idlicenciatura',$idlicenciatura)
		->from('licenciatura')
		->get()
		->row();
		return $Query;
	}

	public function accesoTmaterias($alumno_idalumno){
		$Query = $this->db->where('am.alumno_idalumno',$alumno_idalumno)
		->from('alumno_has_materias as am')
		->join('materias as m', 'am.materias_idmaterias = m.idmaterias')
		->get()
		->result();
		return $Query;
	}

	
}