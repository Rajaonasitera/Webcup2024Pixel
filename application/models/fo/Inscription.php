<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    

   // INSCRIPTION D'UN CLIENT
   public function subscription($nom_client, $genre, $dtn, $id_pays, $email, $mdp, $id_categorie){
        try {
            $data['nom_client'] = $nom_client;
            $data['genre'] =  $genre;
            $data['dtn'] =  $dtn;
            $data['id_pays'] = $id_pays;
            $data['email'] = $email;
            $data['mdp'] = $mdp;
            $data['pseudo'] = "";
            $data['id_categorie'] = $id_categorie;
            $data['histoire'] = "";
        
            $this->db->insert('client', $data);
            return $this->db->insert_id();
        } catch (Exception $e) {
            // If an exception occurs during insertion, return an error message
            return 'Error inserting paiement: ' . $e->getMessage();
        }
    }
}
