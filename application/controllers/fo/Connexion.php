<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

	
    public function __construct(){
        parent::__construct();
        $this->load->model('fo/Login');
		$this->load->model('fo/Inscription');
		$this->load->model('fo/programme/Hability');
    }

	// INSCRIPTION LOGIN
	public function abonnement(){
		$nom_client = $this -> input -> post('nom_client');
		$genre = $this -> input -> post('genre');
		$dtn = $this -> input -> post('dtn');
		$id_pays = $this -> input -> post('id_pays');
		$email = $this -> input -> post('email');
		$mdp = $this -> input -> post('mdp');
		$id_categorie = $this -> input -> post('id_categorie');
		$this->db->trans_start(); // Start a transaction

		$id = $this -> Inscription -> subscription($nom_client, $genre, $dtn, $id_pays, $email, $mdp, $id_categorie);
		$this-> Hability -> setHabilitiesFirst($id);
		$this-> Hability -> insertNoteCategorie($id, 5);

		$this->db->trans_complete(); // Complete the transaction
		
		
		session_start();
		$_SESSION['user_id'] = $id;
		$_SESSION['id_categorie'] = $id_categorie;

		// REDIRECTION MAKANY AMIN LISTE DES FORMATIONS
		redirect(base_url().'index.php/fo/fonctionnalite/f2/');
	}

	// INSCRIPTION PAGE
	public function inscriptionPage(){
		$data['categories'] = $this -> Inscription -> getCategories();
		$data['pays'] = $this -> Inscription -> getPlanete();
		$this->load->view('fo/inscription', $data);
	}

	
	// VERIFICATION LOGIN
	public function verifyLogin(){
	
		$email = $this -> input -> post('email');
		$mdp = $this -> input -> post('mdp');

		$result = $this -> Login -> verifyLogin($email, $mdp);

		if($result['etat'] == 1){

			$data = $result['data'];
			session_start();
			$_SESSION['user_id'] = $data['id_client'];
			$_SESSION['id_categorie'] = $data['id_categorie'];
			// EN CAS HOE ADMIN LE OLONA
			if($data['is_admin'] == 0){
				redirect(base_url().'index.php/bo/dashController/getDashBoard/');
			} else {
				redirect(base_url().'index.php/fo/welcome/');
			}

		} else {
			redirect('fo/connexion/login/1');
		}
	}

	// PAGE LOGIN
	public function login($etat){
		if($etat == 0){
			$this->load->view('fo/login');
		} else {
			$data['etat'] = "Login ou mot de passe incorrect";
			$this->load->view('fo/login', $data);
		}	
	}

	// DECONNEXION
	public function logout()
	{
		// $this->session->unset_userdata('user_data');
		redirect(base_url().'index.php/fo/connexion/login/0');
	}

	// HOME LOGIN
	public function index()
	{
		$this->load->view('fo/login');
		
	}		
}
