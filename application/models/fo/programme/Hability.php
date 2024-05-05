<?php
date_default_timezone_set('Indian/Antananarivo');
defined('BASEPATH') OR exit('No direct script access allowed');

class Hability extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // GET THE VALUE TO ADD TO NOTE CATEGORIES
    public function noteToAddResultCategorie($id_programme, $id_categorie){
        $this->db->select('*');
        $this->db->from('result_categorie');
        $this->db->where('id_programme', $id_programme);
        $this->db->where('id_categorie', $id_categorie);
        $query = $this->db->get();

        $temp = $query->row_array();
        return $temp['valeurPlus'];
    }

    // GET VALUE TO ADD TO A HABILITY FROM A PROGRAMME
    public function noteToAddResultHability($id_programme, $id_hability){
        $this->db->select('*');
        $this->db->from('result_hability');
        $this->db->where('id_programme', $id_programme);
        $this->db->where('id_hability', $id_hability);
        $query = $this->db->get();

        $temp = $query->row_array();
        return $temp['valeurPlus'];
    }


    // INSERER UNE DEPART DE HABILITE
    public function setHabilitiesFirst($id_client){
        $habilities = $this -> getHabilities();
        $this->db->trans_start(); // Start a transaction
        foreach($habilities as $h){
            $this -> insertHabilityClient($h['id_hability'], $id_client, 5);
        }
        $this->db->trans_complete(); // Complete the transaction
    }

    // INSERTION D'UNE NOTE DE CATEGORIES
    public function insertNoteCat($id_client, $noteCat){
        $data['id_client'] = $id_client;
        $data['noteCat'] = $noteCat;
        $data['dateNote'] = date('Y-m-d');

        $this->db->insert('note_category', $data);
    }

    
    // INSERTION D'UNE NOTE DE CATEGORIES
    public function insertNoteCategorie($id_client, $noteCat){
        $data['id_client'] = $id_client;
        $data['noteCat'] = $noteCat;
        $data['dateNote'] = date('Y-m-d');

        $this->db->insert('note_category', $data);
    }

    // INSERTION D'UNE HABILITE
    public function insertHabilityClient($id_hability, $id_client, $valeur){
        $data['id_client'] = $id_client;
        $data['valeur'] = $valeur;
        $data['id_hability'] = $id_hability;
        $data['dateHability'] = date('Y-m-d');

        $this->db->insert('hability_client', $data);
    }

    // PRENDRE TOUS LES HABILITY
    public function getHabilities(){
        $this->db->select('*');
        $this->db->from('hability');

        $query = $this->db->get();

        return $query->result_array();
    }
}
