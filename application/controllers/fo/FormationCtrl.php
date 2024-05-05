<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormationCtrl extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('fo/service/Formation');
    }

    public function paiement(){
        $id_pack = $this -> input -> post('id_pack');
        session_start();
        $this -> Formation -> makePaiement($_SESSION['user_id'], $id_pack);
        redirect(base_url().'index.php/fo/welcome/');
    }   

}
