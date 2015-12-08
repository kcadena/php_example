<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageIndex extends CI_Controller {

	function __construct(){
		parent::__construct();
		//cargar helpers para ser usados en el controlador y la vista
		$this->load->helper('url');//manejo de urls  -> base_url()
		$this->load->helper('my_helper');	//helper creado
		$this->load->helper('form');		//manejo de forms con codeigniter
		$this->load->model('Model_est');	//utilizar modelo creado 
	}

	public function index()
	{
		$this->load->view('index/header');
		$this->load->view('index/home');
		$this->load->view('index/footer');
	}
	public function call_helper(){
		$this->load->view('index/header');
		$this->load->view('index/helper');
		$this->load->view('index/footer');
	}
	public function call_home(){
		$this->load->view('index/home');
	}

	public function call_library(){
		$this->load->library('submenu',array('Progra 3','CodeIgniter','GroceryCrud'));
		$data['mi_submenu']= $this->submenu->construirMenu();
		$this->load->view('index/header');
		$this->load->view('index/submenu',$data);
		$this->load->view('index/footer');
	}

	public function call_forms(){
		$this->load->view('index/header');
		$this->load->view('index/forms');
		$this->load->view('index/footer');
	}

	public function recibirDatos(){
		$data = array(
			'codigo' =>$this->input->post('codigo'),
			'nombre' =>$this->input->post('nombre'),
			'carrera'=>$this->input->post('carrera')
			);
		$this->Model_est->crearEstudiante($data);
		header ("Location: ".base_url()."pageindex/call_forms");
	}
	function buscarEst(){
		$this->load->view('index/header');
		$data['id'] = $this->input->post('id');
		$dat['datos']=$this->Model_est->obtenerEstu($data);
		$this->load->view('index/buscar_est',$dat);
		$this->load->view('index/footer');
	}


}
 