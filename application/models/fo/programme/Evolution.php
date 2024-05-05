<?php
date_default_timezone_set('Indian/Antananarivo');
defined('BASEPATH') OR exit('No direct script access allowed');

class Evolution extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('fo/programme/Hability');
    }

    // GET THE CLIENT BY ID
    public function getClientById($id_client){
        $this->db->select('*');
        $this->db->from('v_user_complet');
        $this->db->where('id_client', $id_client);
        $query = $this->db->get();

        return $query->row_array();
    }

    // FINIR UN PROGRAMME
    public function submitProgramme($id_client, $id_programme, $id_categorie){
        $this->db->trans_start(); // Start a transaction

        $this-> insertNoteCategorie($id_client, $id_programme, $id_categorie);
        $this-> insertHabilityData($id_client, $id_programme);

        $this->db->trans_complete(); // Complete the transaction
    }

    // INSERTION D;UNE NOTE DE CATEGORIE
    public function insertNoteCategorie($id_client, $id_programme, $id_categorie){
        $noteToAdd = $this -> Hability -> noteToAddResultCategorie($id_programme, $id_categorie);
        $this -> Hability -> insertNoteCat($id_client, $noteToAdd);
    }

    // INSERTION D'UNE HABILITY CLIENT PAR RAPPORT A UN PROGRANNE
    public function insertHabilityData($id_client, $id_programme){
        $habilities = $this -> Hability -> getHabilities();
        $this->db->trans_start(); // Start a transaction
        foreach($habilities as $h){
            $noteToAdd = $this -> Hability -> noteToAddResultHability($id_programme, $h['id_hability']);
            $this -> Hability -> insertHabilityClient($h['id_hability'], $id_client, $noteToAdd);
        }
        $this->db->trans_complete(); // Complete the transaction
    }

    // AJOUTER UNE PROGRAMME
    public function addProgramme($id_client, $id_programme){
        $data['id_client'] = $id_client;
        $data['id_programme'] = $id_programme;
        $data['dateDebut'] = date('Y-m-d');
        $data['statusProgramme'] = 1;

        $this->db->insert('programme_client', $data);
    }


    // PRENDRE MA NOTE
    public function getMyLevel($id_client){
        $this->db->select('*');
        $this->db->from('v_some_categories');
        $this->db->where('id_client', $id_client);
        $query = $this->db->get();

        return $query->row_array();
    }

    // PRENDRE MES HABILITEIS
    public function getMyHabilities($id_client){
        $this->db->select('*');
        $this->db->from('v_some_hability_complet');
        $this->db->where('id_client', $id_client);
        $query = $this->db->get();

        return $query->result_array();
    }
}
