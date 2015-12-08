<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_est extends CI_Model {	//extiende de CI_Model
	function __construct(){			//constructor
		parent::__construct();		//herencia del padre
		$this->load->database();	//carga el modelo
	}
	function crearEstudiante($data){
		$this->db->insert('estudiante',array('cod_est'=>$data['codigo'],'nom_est'=>$data['nombre'],'id_carrera'=>$data['carrera']));
	}

	public	function obtenerEst(){
		//metodo codeigniter
		//$datos = $this->db->get('estudiante');

		//codeigniter con query
		$sql = "SELECT * FROM estudiante ORDER BY nom_est DESC"; 
		$datos = $this->db->query($sql);

/*
otro ejemplo
$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?"; 

$this->db->query($sql, array(3, 'live', 'Rick'));
*/

		##########################################
		if($datos->num_rows() > 0) return $datos;
	}

	
	function obtenerEstu($dat){
		//metodo normal
		/*$this->db->select('*');
		$this->db->from('estudiante');
		$this->db->join('carrera', 'carrera.id_carrera = estudiante.id_carrera');
		$this->db->where('cod_est',$dat['id']);
		*/

		//metodo chaining php 5
		$this->db->select('*')->from('estudiante')->join('carrera', 'carrera.id_carrera = estudiante.id_carrera')->where('cod_est',$dat['id']);

		$datos = $this->db->get();
		if($datos->num_rows() > 0) return $datos;
		else return false;

		/*
		$this->db->where('cod_est',$dat['id']);
		$datos = $this->db->get('estudiante');
		if($datos->num_rows() > 0) return $datos;
		else return false;*/
	}

	function obtenerCarreras(){
		//metodo normal
		/*$this->db->select('*');
		$this->db->from('carrera');
		$this->db->order_by("nom_carr", "asc"); 
		*/
		//metodo chaining  php 5
		$this->db->select('*')->from('carrera')->order_by("nom_carr", "asc");

		$dat = $this->db->get();
		if($dat->num_rows() > 0) return $dat;
		else return false;
	}


}
?>