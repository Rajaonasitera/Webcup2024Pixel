<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vente extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // PRENDRE L'HISTORIQUE DES VENTES
    public function getVenteHistory(){
        $this->db->select('*');
        $this->db->from('v_vente_history');
        $query = $this->db->get();
        return $query->result_array();
    }

    // PRENDRE LE CHIFFRE D'AFFAIRE PAR PAYS
    public function getChiffreParPays(){
        $this->db->select('*');
        $this->db->from('v_vente_pays');
        $query = $this->db->get();
        $data = $query->result_array();

        $json_data = json_encode($data);
        return $json_data;
    }
    
    // Prendre le total CA
    public function getChiffreAffaire(){
        $this->db->select('*');
        $this->db->from('v_stat_vente');
        $query = $this->db->get();
        return $query->row_array();
    }

    
}
