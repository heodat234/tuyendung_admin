<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['remove_spaces'] = true;
	    $config['file_ext_tolower'] = true;    
	    $this->load->library('upload', $config);
		

		$this->load->helper('url');
		
		

		$this->load->library('session');
		
		
		// $this->load->model(array('Login_model'));
		// $this->load->helper(array('url','my_helper','file'));
		$this->data['header'] = $this->load->view('home/header',null,true);
	    $this->data['menu'] = $this->load->view('home/menu',null,true);
	    $this->data['footer'] = $this->load->view('home/footer',null,true);
	}
	public function index()
	{

		$this->data1['nav'] = $this->load->view('page/nav',null,true);
		$this->data['temp'] = $this->load->view('page/content',$this->data1,true);

		$this->load->view('home/master',$this->data);
	}
	public function profile()
	{
		$this->data1['nav'] = $this->load->view('page/nav-profile',null,true);
		$this->data['temp'] = $this->load->view('page/profile',$this->data1,true);

		$this->load->view('home/master',$this->data);
	}
}
?>