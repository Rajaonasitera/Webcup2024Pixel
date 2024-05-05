<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class EvolutionCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('fo/programme/Entrainement');
        $this->load->model('fo/programme/Hability');
        $this->load->model('fo/programme/Evolution');
    }

    // // MON EVOLUTION
    // public function myEvolution($id_client){

    //     $data['client'] = $this -> Evolution -> getClientById($id_client);
	// 	$data['level'] = $this -> Evolution -> getMyLevel($id_client);
    //     $data['habilities'] = $this -> Evolution -> getMyHabilities($id_client);
	// 	$this->load->view('fo/service/service3', $data);
    // }

        // MON EVOLUTION
    public function myEvolution(){
        if(isset($_SESSION['user_id'])){
            $data['client'] = $this -> Evolution -> getClientById($_SESSION['user_id']);
            $data['level'] = $this -> Evolution -> getMyLevel($_SESSION['user_id']);
            $data['habilities'] = $this -> Evolution -> getMyHabilities($_SESSION['user_id']);
            $this->load->view('fo/service/service3', $data);
        }else{
            redirect('fo/connexion/login/0');
        }
       
    }

    // Liste des programmes
	public function newProgramme(){
        if(isset($_SESSION['user_id'])){
            $id_programme = $this -> input -> post('id_programme');
            $this -> Evolution -> submitProgramme($_SESSION['user_id'], $id_programme, $_SESSION['id_categorie']);
            // $this -> Evolution -> submitProgramme(176, $id_programme, "CAT6");

            // $this->load->view('fo/service/programme', $data);    // REDIRECT MAKANY AMN MON EVOLUTION
            redirect(base_url().'index.php/fo/evolutionCtrl/myEvolution/' . $$_SESSION['user_id']);
        }else{
            redirect('fo/connexion/login/0');
        }
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
