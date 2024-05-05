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

    // MON EVOLUTION
    public function myEvolution($id_client){

        $data['client'] = $this -> Evolution -> getClientById($id_client);
		$data['level'] = $this -> Evolution -> getMyLevel($id_client);
        $data['habilities'] = $this -> Evolution -> getMyHabilities($id_client);
		$this->load->view('fo/service/service3', $data);
    }

    // Liste des programmes
	public function newProgramme(){
        $id_programme = $this -> input -> post('id_programme');
        session_start();
        $this -> Evolution -> submitProgramme($_SESSION['user_id'], $id_programme, $_SESSION['id_categorie']);
        // $this -> Evolution -> submitProgramme(176, $id_programme, "CAT6");

		// $this->load->view('fo/service/programme', $data);    // REDIRECT MAKANY AMN MON EVOLUTION
        redirect(base_url().'index.php/fo/evolutionCtrl/myEvolution/' . $$_SESSION['user_id']);
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
