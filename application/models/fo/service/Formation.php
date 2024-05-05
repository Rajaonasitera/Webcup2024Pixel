<?php
date_default_timezone_set('Indian/Antananarivo');
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('bo/Pack');
    }
    
    // Faire un paiement
    public function makePaiement($id_client, $id_pack){
        $pack = $this -> Pack -> getDetailPackById($id_pack);
        $data['id_client'] = $id_client;
        $data['id_pack'] = $pack['id_pack'];
        $data['dateSubscription'] = date('Y-m-d');
        $data['endSubscription'] = date('Y-m-d', strtotime('+1 year'));
        $data['etat'] = 1;
        $data['pu_pack'] = $pack['pu'];

        $this->db->insert('vente', $data);
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
