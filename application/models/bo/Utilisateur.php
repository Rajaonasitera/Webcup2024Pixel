<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // LISTE DES UTILISATEURS
    public function getUtilisateurs(){
        $this->db->select('*');
        $this->db->from('v_vente_utilisateur_complet');
        $query = $this->db->get();
        return $query->result_array();
    }

    // NOMBRE DES UTILISATEURS PAS TANCHE D'AGE ET PAR GENRE (Otran tsy mety)
    public function getRepartitionUtilisateur(){
        // 15 - 20
        $quinzeH = $this->getUserBetweenAge(1, 15, 20);
        $quinzeF = $this->getUserBetweenAge(0, 15, 20);

         // 20 - 25
         $vingtH = $this->getUserBetweenAge(1, 20, 25);
         $vingtF = $this->getUserBetweenAge(0, 20, 25);

          // 25 - 30
        $vcinqH = $this->getUserBetweenAge(1, 25, 30);
        $vcinqF = $this->getUserBetweenAge(0, 25, 30);

         // 30 - 35
         $trenteH = $this->getUserBetweenAge(1, 30, 35);
         $trenteF = $this->getUserBetweenAge(0, 30, 35);

          // 35 - 40
        $tcinqH = $this->getUserBetweenAge(1, 35, 40);
        $tcinqF = $this->getUserBetweenAge(0, 35, 40);

         // 40 - 45
         $quaranteH = $this->getUserBetweenAge(1, 40, 45);
         $quaranteF = $this->getUserBetweenAge(0, 40, 45);

          // 45 - +
        $plusH = $this->getUserBetweenAge(1, 45, 100);
        $plusF = $this->getUserBetweenAge(0, 45, 100);


        $result = [
            [$quinzeH, $vingtH, $vcinqH, $trenteH, $tcinqH, $quaranteH, $plusH],
            [-$quinzeF, -$vingtF, -$vcinqF, -$trenteF, -$tcinqF, -$quaranteF, -$plusF]
        ];

        $json_data = json_encode($result);
        return $json_data;
    }

    // Prendre nombre d utilisareyrs par genre et entre 2 ages
    public function getUserBetweenAge($genre, $ageMin, $ageMax){

        $query = sprintf("SELECT count(*) as nbr FROM v_age_utlisateur WHERE genre = %u AND age >= %u AND age < %u", $genre, $ageMin, $ageMax);
        $sql = $this->db->query($query);

        $temp = $sql->row_array();

       return $temp['nbr'];
    }
    
    // Nombre total d'utilisateurs
    public function getTotalUtilisateurs(){
        $query = "select count(*) as total_user from client ";
        $sql = $this->db->query($query);

        $temp = $sql->row_array();
        return $temp['total_user'];
    }
    
}
