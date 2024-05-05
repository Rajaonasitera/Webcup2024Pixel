<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    

   // PRENDRE LOGIN DATA
   public function verifyLogin($nom, $mdp){
    $this->db->select('*');
    $this->db->from('client');
    $this->db->where('email', $nom);
    $this->db->where('mdp', $mdp);
    $query = $this->db->get();

    $result = $query->row_array();

    if($result != null){
        return array(
            'etat' => 1,
            'data' => array(
                'nom_client' => $result['nom_client'],
                'is_admin' => $result['is_admin'],
                'id_client' => $result['id_client'],
                'id_categorie' => $result['id_categorie']
            )
        );
    }else{
        return array(
            'etat' => 0,
            'data' => null
        );
    }
}
}
