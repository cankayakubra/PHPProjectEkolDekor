<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
				 $this->load->model('Database_Model');
               $this->load->helper('url'); 
			   $this->load->library("session");
              
                if (!$this->session->userdata("admin_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'admin/login');					
        }
	public function index()
	{
		
		
	
			//$query=$this->db->query($sql);
			$query=$query=$this->db->query("SELECT * FROM Siparisler WHERE durum='Yeni' ORDER BY Id desc");
			$data["veriler"]=$query->result();
			$this->load->view('admin\siparis_listesi', $data);
		
	}
		public function ekle()
	{
			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$query->result();
			$this->load->view('admin\siparisler_ekle');
			
		
	}
		public function ekle_kaydet()
	{
	    //Form verilerini alıcaz
		$data=array(
		 'kodu'=> $this->input->post('kodu'),
		  'adi'=>$this->input->post('adi'),
		  'kategori'=>$this->input->post('kategori'),
		  'turu'=>$this->input->post('turu'),
		
		  'sfiyat'=>$this->input->post('sfiyat'),
		  'resim'=>$this->input->post('resim'),
		 
		  );
		  $this->db->insert("siparisler",$data);
		  $this->session->set_flashdata("mesaj","Ürün kaydı gerçekleşti");
		  redirect(base_url().'admin/siparisler');
	}
		public function duzenle($id)
	{
		
		
			$query=$this->db->query("SELECT * FROM kategoriler");
			$data["veriler"]=$query->result();
			$data["veri"]=$this->Database_Model->get_urun($id);
			$this->load->view('admin\siparisler_duzenle_formu', $data);	
	}
	
	
	public function guncelle($id)
	{
	    //Form verilerini alıcaz
		$data=array(
		 'adres'=> $this->input->post('adres'),
		  'adsoy'=>$this->input->post('adsoy'),
		
		  'sehir'=>$this->input->post('sehir'),
		 
		  'kargofirma'=>$this->input->post('kargofirma'),
		  'kargono'=>$this->input->post('kargono'),
		  
		  'durum'=>$this->input->post('durum'),
		  'not'=>$this->input->post('not'),
		  
		  
		  );
		
		  $this->Database_Model->update_data("siparisler",$data,$id);
		  $this->session->set_flashdata('mesaj','Güncelleme Yapıldı!');
				redirect(base_url().'admin/siparisler');
	}
		public function sil($id)
	{
			$this->db->query("DELETE FROM siparisler WHERE id=$id");
			  redirect(base_url().'admin/siparisler');	
	}
	
	
		public function siparis_detay($id)
	{
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepet ||";
		$data["menu"]="sepetim";
	if(!$this->session->userdata('admin_session'))
	{
		$this->session->set_flashdata('mesaj','Giriş Yapınız!');
		redirect(base_url()."admin/login");
	}	
	     $uye_id=$this->session->uye_session["id"];
         $query=$this->db->query("select * from ayarlar limit 1");
         $data["veri"]=$query->result();
		 
		 $uye_id=$this->session->uye_session["id"];
		$query=$this->db->query(" select * from  siparisler WHERE Id=$id"	);
		 $data["siparis"]=$query->result();
		 	$query=$this->db->query(" select * from  siparis_urunler WHERE siparis_id=$id"	);
		 $data["urunler"]=$query->result();
		 $this->load->view('admin/siparisler_detay',$data); 
		 
	}
		public function siparisler_onayli()
	{
		
		
	
			//$query=$this->db->query($sql);
			$query=$query=$this->db->query("SELECT * FROM Siparisler WHERE durum='Onaylandi' ORDER BY Id desc");
			$data["veriler"]=$query->result();
			$this->load->view('admin\siparis_listesi_onayli', $data);
		
	}
			public function kargodakiler()
	{
		
		
	
			//$query=$this->db->query($sql);
			$query=$query=$this->db->query("SELECT * FROM Siparisler WHERE durum='Kargoda' ORDER BY Id desc");
			$data["veriler"]=$query->result();
			$this->load->view('admin\siparis_listesi_kargoda', $data);
		
	}
				public function tamamlananlar()
	{
		
		
	
			//$query=$this->db->query($sql);
			$query=$query=$this->db->query("SELECT * FROM Siparisler WHERE durum='Tamamlandi' ORDER BY Id desc");
			$data["veriler"]=$query->result();
			$this->load->view('admin\siparis_listesi_tamamlandi', $data);
		
	}
	
	
	
	
}
