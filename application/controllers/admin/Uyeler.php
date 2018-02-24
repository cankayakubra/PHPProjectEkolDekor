<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
               $this->load->helper('url'); 
			   $this->load->library("session");
              
                if (!$this->session->userdata("admin_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'admin/login');					
        }
	public function index()
	{
			$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
			$data["veriler"]=$query->result();
			$this->load->view('admin\uyeler_liste', $data);
		
	}
		public function ekle()
	{
			
			$this->load->view('admin\uyeler_ekle');
		
	}
		public function ekle_kaydet()
	{
	    //Form verilerini alıcaz
		$data=array(
		 'adsoy'=> $this->input->post('adsoy'),
		  'email'=>$this->input->post('email'),
		  'sehir'=>$this->input->post('sehir'),
		  'tel'=>$this->input->post('tel'),
		  'durum'=>$this->input->post('durum'),
		  'yetki'=>$this->input->post('yetki'),
		  'adres'=>$this->input->post('adres'),
		  'sifre'=>$this->input->post('sifre'),
		  );
		  $this->db->insert("uyeler",$data);
		  $this->session->set_flashdata("mesaj","üye kaydı gerçekleşti");
		  redirect(base_url().'admin/uyeler');
	}
		public function duzenle($id)
	{
			$query=$this->db->query("SELECT * FROM uyeler WHERE id=$id");
			$data["veri"]=$query->result();
			$this->load->view('admin\uyeler_duzenle_formu', $data);	
	}
	
	
	public function guncelle($id)
	{
	    //Form verilerini alıcaz
		$data=array(
		 'adsoy'=> $this->input->post('adsoy'),
		  'email'=>$this->input->post('email'),
		  
		  'tel'=>$this->input->post('tel'),
		  'sehir'=>$this->input->post('sehir'),
		  'yetki'=>$this->input->post('yetki'),
		  'durum'=>$this->input->post('durum'),
		  
		  'adres'=>$this->input->post('adres'),
		  'sifre'=>$this->input->post('sifre'),
		  );
		 $this->load->model('Database_Model');
		  $this->Database_Model->update_data("uyeler",$data,$id);
		
		  redirect(base_url().'admin/uyeler');
	}
		public function sil($id)
	{
			$this->db->query("DELETE FROM uyeler WHERE id=$id");
			  redirect(base_url().'admin/uyeler');	
	}
			public function profil()
	{
		
			$query=$this->db->query(" SELECT * FROM  uyeler WHERE Id=" .$this->session->admin_session["id"]);
		$data["veri"]=$query->result();
		
		$this->load->view('admin/profil',$data);
	}
}
