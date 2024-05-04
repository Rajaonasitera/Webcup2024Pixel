<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonctionnalite extends CI_Controller {


	public function __construct(){
        parent::__construct();
		$this->load->model('fo/service/Orientation');
    }

	public function f1()
	{
		redirect(base_url().'index.php/fo/orientationCtrl/orientationPage/');
	}		
    public function f2()
	{
		$this->load->view('fo/service/fonctionnalite2');
		
	}	
    public function f3()
	{
		$this->load->view('fo/service/fonctionnalite3');
		
	}	
}
