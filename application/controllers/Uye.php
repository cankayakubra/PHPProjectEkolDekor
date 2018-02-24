<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
               $this->load->helper('url'); 
			   $this->load->library("session");
              $this->load->model('Database_Model');
                if (!$this->session->userdata("uye_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'login');					
        }
	public function index()
	{
			$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
			$query=$this->db->query(" SELECT * FROM  uyeler WHERE ıd=" .$this->session->uye_session["id "]);
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Paneli ||";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);
	}
			public function hesabim()
	{
			$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı ||";
		$data["menu"]="uye";
			$query=$this->db->query(" SELECT * FROM  uyeler WHERE Id=" .$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		
		$this->load->view('hesabim',$data);
	}
			public function uye_guncelle()
	{
			$data=array(
		 'adsoy'=> $this->input->post('adsoy'),
		  'email'=>$this->input->post('email'),
		  'adres'=>$this->input->post('adres'),
	        'tel'=>$this->input->post('tel')
		  	  );
		 
			  $id=$this->session->uye_session["id"];
		  $this->Database_Model->update_data("uyeler",$data,$id);
		  $this->session->set_flashdata("mesaj","üye Bilgileriniz Güncellendi");
		  redirect(base_url().'uye/hesabim');
	}
		public function detay($id)
	{
		$query=$this->db->query("SELECT  * FROM Mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesaj_detay',$data);
	}
			public function siparisler()
	{
			$query=$this->db->query(" select * from  ayarlar limit 1 ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı ||";
		$data["menu"]="uye";
		 $uye_id=$this->session->uye_session["id"];
		$query=$this->db->query(" select * FROM  siparisler WHERE uye_id=$uye_id"	);
		$data["veriler"]=$query->result();
		
		$this->load->view('siparisler',$data);
		
	}


	public function resim_ekle()
	{
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();	
			$data["sayfa"]="Resim Üye Paneli ||";
		$data["menu"]="resim";
		$query=$this->db->query("SELECT * FROM uye_resim WHERE uye_id");
		$data["veriler"]=$query->result();
		
		
		
	
		
		
	$this->load->view('uye_resim_ekle',$data);
	
	
	} 
	
}
