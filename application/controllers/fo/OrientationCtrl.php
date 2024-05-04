<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrientationCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('fo/service/Orientation');
    }
    
	// PRENDRE LES REPONSES
	public function reponseOrientation(){
		$q1 = $this -> input -> post('question0');
		$q2 = $this -> input -> post('question1');
		$q3 = $this -> input -> post('question2');

		$tab = [];
		$tab[] = $q1;
		$tab[] = $q2;
		$tab[] = $q3;

		$orientation = $this -> Orientation -> getMyOrientation($tab);
		redirect(base_url().'index.php/fo/orientationCtrl/orientationResult/'.$orientation);
	}

	// REPONSE D'UNE ORIENTATION
	public function orientationResult($id_categorie){
		$data['categorie'] = $this -> Orientation -> getCategorieById($id_categorie);
		$this->load->view('fo/service/service1reponse', $data);		// A CHANGER DE LIEN
	}

	// PAGE D'ORIENTATION
	public function orientationPage()
	{
		$data['questions'] = $this -> Orientation -> getQuestions();
		$this->load->view('fo/service/service1', $data);
	}		
}
