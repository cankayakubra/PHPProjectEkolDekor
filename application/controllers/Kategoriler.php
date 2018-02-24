<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("Database_Model");
		$this->load->library("session");
		
	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY parent_id");
		$data["veriler"]=$query->result();	
		
		
		
		
		//$data["veriler"]=$this->Database_Model->get_urunler();
		//$data["veriler"]=$this->Database_Model->get_markalar();
		
		
		$this->load->view('admin/kategoriler_liste',$data);
	}
	
	

	

	
	public function detay($id)
	{
		  
		 $query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$query=$this->Database_Model->get_kategori($id);
		$data["kategoriler"]=$query->result();
		$data["sayfa"]="Detay ||";
		$data["menu"]="detay";
		
			
		
	//	$data["veri"]=$this->Database_Model->get_urun($id);
		
		
		
		$this->load->view('kategoriler_detay',$data);
		
	}
}
