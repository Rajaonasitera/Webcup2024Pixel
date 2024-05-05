<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('/../BaseSessionController.php');

class DashController extends BaseSessionController {

    public function __construct() {
        parent::__construct();
        $this->load->model('bo/Utilisateur');
        $this->load->model('bo/Vente');
        $this->load->model('bo/Pack');
        $this->load->helper('my_helper');
    }


    // DASHBOARD EN ENTIER
	public function getDashBoard()
	{
		$data['ca'] =  $this -> Vente -> getChiffreAffaire();    // ca et nobre de vente
        $data['nbr_users'] =  $this -> Utilisateur -> getTotalUtilisateurs();
        $data['meilleur_pack'] =  $this -> Pack -> getMeilleurPack();
        $data['ca_par_pays'] =  $this -> Vente -> getChiffreParPays();     // Avec repartition et users par pays
        $data['users_par_tranche'] =  $this -> Utilisateur -> getRepartitionUtilisateur(); 

        $data['page_title'] = "Dashboard";
		$data['icon'] = "bi bi-bar-chart-line";
		$data['content'] = 'bo/home';
		$this->load->view('bo/main',$data);
	}		
}
