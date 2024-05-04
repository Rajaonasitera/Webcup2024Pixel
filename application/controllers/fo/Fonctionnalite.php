<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonctionnalite extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function f1()
	{
		$this->load->view('fo/service/service1');
		
	}		
    public function f2()
	{
		$this->load->view('fo/service/fonctionnalite2');
		
	}	
    public function f3()
	{
		$this->load->view('fo/service/fonctionnalite3');
		
	}	
	public function reponse(){
		$this->load->view('fo/service/service1reponse');
	}
}
