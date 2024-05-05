<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pack extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    

    // PRENDRE TOUS LES SERVICES D'UN PACK
    public function getDetailPack($id_pack){
        $this->db->select('*');
        $this->db->from('v_detail_pack');
        $this->db->where('id_pack', $id_pack);
        $query = $this->db->get();

        return $query->result_array();
    }

    // PRENDRE LE DETAIL D'UN PACK PAR ID
    public function getDetailPackById($id_pack){
        $this->db->select('*');
        $this->db->from('pack');
        $this->db->where('id_pack', $id_pack);
        $query = $this->db->get();

        return $query->row_array();
    }

    // PRENDRE TOUS LES PACKS
    public function getAllPacks(){
        $this->db->select('*');
        $this->db->from('pack');
        $query = $this->db->get();

        return $query->result_array();
    }

    // PRENDRE LE MEILLEUR PACK
    public function getMeilleurPack(){
        $query = "select 
            pack.nom_pack,
            t.*
        from 
            (select
                id_pack,
                count(id_pack) as nbr_vente,
                sum(pu_pack) as ca_pack
            from vente
            group by id_pack
            order by nbr_vente desc 
            limit 1
            ) as t 
        join pack on pack.id_pack = t.id_pack";
        $sql = $this->db->query($query);

        return $sql->row_array();
    }
}
