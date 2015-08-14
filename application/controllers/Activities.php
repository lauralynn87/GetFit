<?php
class Activities extends CI_controller{
	
	
	public function __construct()
	{
		parent::__construct();
	
	
		$this->load->database();
		$this->load->helper('url');
	
		$this->load->library('Grocery_CRUD');
	}
	
	public function _example_output($output = null)
	{
		$this->load->view('activity.php',$output);
		
	}
	
	public function home(){
		
		$this->load->view('home.php');
		
	}
	
	public function showactivities(){
		if( $this->require_role('member') )
		{
		$crud = new grocery_CRUD();
		
		$crud->set_table('activities');
		$output = $crud->render();
		
		$this->_example_output($output);
		}else{
			$this->load->view('login.php');
		}
	}
	
	public function showgoals(){
		$crud = new grocery_CRUD();
		
		$crud->set_table('goals');
		$output = $crud->render();
		
		$this->_example_output($output);
	}
	
	
}
