<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('/../BaseSessionController.php');

class Fonctionnalite extends BaseSessionController {

	public function __construct(){
        parent::__construct();
		$this->load->model('fo/service/Orientation');
		$this->load->model('bo/Pack');
    }

	// QUI SUIS JE??
	public function f1()
	{
		redirect(base_url().'index.php/fo/orientationCtrl/orientationPage/');
	}		

	// LISTE DES FROPMATIOPNS
    public function f2()
	{
		$data['services'] = $this -> Pack -> getAllPacks();
		$this->load->view('fo/service/service2', $data);
	}	
    public function f3()
	{
		
		$this->load->view('fo/service/programme');
	}	
}
