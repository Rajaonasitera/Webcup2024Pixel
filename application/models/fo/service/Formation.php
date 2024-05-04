<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    // Faire un paiement
    public function makePaiement($id_client, $id_pack){
        // date de subscription aujourdui
        // maka ny prix anle pack
        // tode payena
    }

    // CATEGOIES BY ID
    public function getCategorieById($id_categorie){
        $this->db->select('*');
        $this->db->from('categorie');
        $this->db->where('id_categorie', $id_categorie);

        $query = $this->db->get();

        return $query->row_array();
    }
}
