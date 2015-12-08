<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroceryCrud extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
    public function index()
    {
        $this->add_est();
    }

    function _example_output($output = null)
 
    {
    	//$this->load->view('grocery/header');
        $this->load->view('grocery/estudiantes',$output);    
        //$this->load->view('grocery/footer');
    }

    public function est(){
       $crud = new grocery_CRUD();
 
        $crud->set_theme('datatables');
        $crud->set_table('estudiante');
        $crud->columns('cod_est','nom_est','carrera');
 
        $output = $crud->render();
 
        $this->_example_output($output);
    }
    function example_with_like() {
     
        $crud = new grocery_CRUD();
     
        $crud->like('cod_est','1');
     
        $crud->set_table('estudiante');
        $crud->columns('cod_est','nom_est','carrera');
     
        $output = $crud->render();
     
        $this->_example_output($output);
    }
    
    function add_est(){
        $crud = new grocery_CRUD();

        //$crud->where('carrera','1');
        //$crud->like('carrera','1');

        $crud->set_table('estudiante');
        $crud->set_theme('datatables');

        $crud->required_fields('nom_est')->display_as('nom_est','Nombre: ');//requercod_esto
        //$crud->unset_operations();//no deja hacer operaciones
        //$crud->columns('nom_est');//mostrar campos
        //$crud->unset_columns('cod_est');//ocultar campos
        //$crud->fields('nom_est','carrera');//add record
        
       	//$crud->add_action('More', '', 'demo/action_more','ui-icon-plus');//mas operaciones acciones

       	//$crud->unset_texteditor('cod_est');
        
		//$crud->add_fields('nom_est','carrera');
  		$crud->edit_fields('carrera');

        $output = $crud->render();
        //$crud->order_by('nom_est');
        $this->_example_output($output);
        //echo $crud->get_primary_key();
    }
    public function join(){
    	
       $crud = new grocery_CRUD();
 
        $crud->set_theme('datatables');
        $crud->set_table('estudiante');
        $crud->set_subject('estudiante');

       	$crud->set_relation('id_carrera', 'carrera', 'nom_carr');
        //$crud->columns('cod_est','nom_est','nom_carr');
 
        $output = $crud->render();
 
        $this->_example_output($output);
    
    }
}
