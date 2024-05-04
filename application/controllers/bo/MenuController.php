<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('bo/Vente');
        $this->load->model('bo/Utilisateur');
        $this->load->model('bo/Pack');

        $this->load->helper('my_helper');
    }

    // LA LISTE DES services
    public function listeService(){
        $data['packs'] =  $this -> Pack -> getAllPacks(); 

        $data['page_title'] = "Nos packs de service";
        $data['icon'] = "bi bi-handbag";
        $data['content'] = 'bo/service';
        $this->load->view('bo/main',$data);
    }

    // LA LISTE DES Ventes
    public function listeVentes(){
        $data['ventes'] =  $this -> Vente -> getVenteHistory();  

        $data['page_title'] = "Ventes";
		$data['icon'] = "bi bi-cart-check";
		$data['content'] = 'bo/vente';
		$this->load->view('bo/main',$data);
    }

    // LA LISTE DES CLIENTS
    public function listeClients(){
        $data['utilisateurs'] =  $this -> Utilisateur -> getUtilisateurs();  

        $data['page_title'] = "Clients";
		$data['icon'] = "bi bi-people";
		$data['content'] = 'bo/client';
		$this->load->view('bo/main',$data);
    }

}
