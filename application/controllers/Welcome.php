<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		
		/*load database libray manually*/
		$this->load->database();
		
		/*load Model*/
		$this->load->model('insert_model');
		$this->load->model('select_model');
		$this->load->model('SuprimerContenu_model');

	}

	public function index()
	{
		$response=$this->select_model->findAllcontenue();
		$this->load->view('template/index',array(
			'test' =>$response
		));
	}

	
}
