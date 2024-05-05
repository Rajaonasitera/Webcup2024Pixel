<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('/../BaseSessionController.php');

class EvolutionCtrl extends BaseSessionController {

    public function __construct() {
        parent::__construct();
		$this->load->model('fo/programme/Entrainement');
        $this->load->model('fo/programme/Hability');
        $this->load->model('fo/programme/Evolution');
    }

    // Liste des programmes
	public function newProgramme(){
        $id_programme = $this -> input -> post('id_programme');
        session_start();
        $this -> Evolution -> submitProgramme($_SESSION['user_id'], $id_programme, $_SESSION['id_categorie']);

		// $this->load->view('fo/service/programme', $data);    // REDIRECT MAKANY AMN MON EVOLUTION
	}
    
	// Liste des programmes
	public function listeProgramme(){
        $data['abilities'] = $this -> Entrainement -> getHabilities();
		$data['programmes'] = $this -> Entrainement -> getServices();
		$this->load->view('fo/service/programme', $data);
	}

	// PAGE D'ORIENTATION
	public function orientationPage()
	{
		$data['questions'] = $this -> Orientation -> getQuestions();
		$this->load->view('fo/service/service1', $data);
	}		
}
