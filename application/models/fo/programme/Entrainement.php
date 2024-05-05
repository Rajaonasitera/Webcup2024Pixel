<?php
date_default_timezone_set('Indian/Antananarivo');
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrainement extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // PRENDRE MA LISTE DE PROGRAMME
    public function getListProgrammesFaits($id_client){
        
    }

   // PRENDRE LES EXERCICES D'UN SERVICE
    public function getMyDetailsExercice($id_programme){
        $this->db->select('*');
        $this->db->from('exercice');
        $this->db->where('id_programme', $id_programme);
        $query = $this->db->get();

        return $query->result_array();
    }   

    // PRENDRE TOUS LES SERVICES
    public function getServices(){
        $this->db->select('*');
        $this->db->from('programme');
        $query = $this->db->get();

        return $query->result_array();
    }

    // LISTE DES HABILITIES
    public function getHabilities(){
        $this->db->select('*');
        $this->db->from('hability');
        $query = $this->db->get();

        return $query->result_array();
    }
}
