<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    // PRENDRE TOUS LES CATEGORIES
    public function getCategories(){
        $this->db->select('*');
        $this->db->from('categorie');
        $query = $this->db->get();

        return $query->result_array();
    }

    // PRENDRE TOUS LES PLANETES
    public function getPlanete(){
        $this->db->select('*');
        $this->db->from('pays');
        $query = $this->db->get();

        return $query->result_array();
    }

   // INSCRIPTION D'UN CLIENT
   public function subscription($nom_client, $genre, $dtn, $id_pays, $email, $mdp, $id_categorie){
    echo 'here' . $id_categorie;
        try {
            $data['nom_client'] = $nom_client;
            $data['genre'] =  $genre;
            $data['dtn'] =  $dtn;
            $data['id_pays'] = $id_pays;
            $data['email'] = $email;
            $data['mdp'] = $mdp;
            $data['pseudo'] = "";
            $data['id_categorie'] = $id_categorie;
            $data['is_admin'] = 1;
            $data['histoire'] = "";
           
            
            $this->db->insert('client', $data);
           
            return $this->db->insert_id();
        } catch (Exception $e) {
            // If an exception occurs during insertion, return an error message
            return 'Error inserting paiement: ' . $e->getMessage();
        }
    }
}
