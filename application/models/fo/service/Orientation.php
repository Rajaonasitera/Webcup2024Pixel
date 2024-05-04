<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientation extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    

    // PRENDRE LE CATEGORIES % CHOIX DE REPONSES DANS L'ORIENTATION
    public function getMyOrientation($array_categories){
        $counts = array_count_values($array_categories);
    
        // Trier le tableau par ordre décroissant de fréquence
        arsort($counts);
        
        // Récupérer la clé du premier élément (le plus fréquent)
        $most_frequent_key = key($counts);
        
        // Retourner l'élément le plus fréquent ou le premier élément s'il n'y en a pas de dominant
        return $most_frequent_key !== null ? $most_frequent_key : reset($array_categories);
    }

    // CATEGOIES BY ID
    public function getCategorieById($id_categorie){
        $this->db->select('*');
        $this->db->from('categorie');
        $this->db->where('id_categorie', $id_categorie);

        $query = $this->db->get();

        return $query->row_array();
    }

    // GET ALL REPONSES FROM A QUESTION
    public function getReponsesQuestions($id_question){
        $this->db->select('*');
        $this->db->from('reponse_cat');
        $this->db->where('id_question', $id_question);
        $query = $this->db->get();

        return $query->result_array();
    }


    // GET ALL QUESTIONS
    public function getQuestions(){
        $this->db->select('*');
        $this->db->from('question_cat');

        $query = $this->db->get();

        return $query->result_array();
    }
}
