<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

	
    public function __construct(){
        parent::__construct();
        $this->load->model('fo/Login');
    }

	
	// VERIFICATION LOGIN
	public function verifyLogin(){
	
		$email = $this -> input -> post('email');
		$mdp = $this -> input -> post('mdp');

		$result = $this -> Login -> verifyLogin($email, $mdp);

		if($result['etat'] == 1){

			$data = $result['data'];

			// EN CAS HOE ADMIN LE OLONA
			if($data['is_admin'] == 0){
				redirect(base_url().'index.php/bo/dashController/getDashBoard/');
			} else {
				redirect(base_url().'index.php/fo/welcome/');
			}

		} else {
			redirect('connexion/login/1');
		}
	}

	// PAGE LOGIN
	public function login($etat){
		if($etat == 0){
			$this->load->view('fo/login');
		} else {
			$data['etat'] = "Login ou mot de passe incorrect";
			$this->load->view('login', $data);
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
