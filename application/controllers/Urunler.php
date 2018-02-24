<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
				 $this->load->model('Database_Model');
               $this->load->helper('url'); 
			   $this->load->library("session");
              
                if (!$this->session->userdata("uye_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'home/login');					
        }
	public function urunler()
	{
		
		
	       $query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Urunler ||";
		$data["menu"]="Urunler";
			//$query=$this->db->query($sql);
			$data["veriler"]=$this->Database_Model->get_urunler();
			$this->load->view('urunler_liste', $data);
		
	}
	
	
	
	
}
