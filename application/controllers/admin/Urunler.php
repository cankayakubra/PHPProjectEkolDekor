<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {


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
			$data["veriler"]=$this->Database_Model->get_urunler();
			$this->load->view('admin\urunler_liste', $data);
		
	}
		public function ekle()
	{
			$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			$data["kategoriler"]=$query->result();
			$this->load->view('admin\urunler_ekle');
			
		
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
		  $this->db->insert("urunler",$data);
		  $this->session->set_flashdata("mesaj","Ürün kaydı gerçekleşti");
		  redirect(base_url().'admin/urunler');
	}
		public function duzenle($id)
	{
		
		
			$query=$this->db->query("SELECT * FROM kategoriler");
			$data["veriler"]=$query->result();
			$data["veri"]=$this->Database_Model->get_urun($id);
			$this->load->view('admin\urunler_duzenle_formu', $data);	
	}
	
	
	public function guncelle($id)
	{
	    //Form verilerini alıcaz
		$data=array(
		 'kodu'=> $this->input->post('kodu'),
		  'adi'=>$this->input->post('adi'),
		  'kategori'=>$this->input->post('kategori'),
		  'turu'=>$this->input->post('turu'),
		 
		  'sfiyat'=>$this->input->post('sfiyat'),
		  'resim'=>$this->input->post('resim'),
		  
		  'aciklama'=>$this->input->post('aciklama'),
		  
		  
		  );
		
		  $this->Database_Model->update_data("urunler",$data,$id);
				redirect(base_url().'admin/urunler');
	}
		public function sil($id)
	{
			$this->db->query("DELETE FROM urunler WHERE id=$id");
			  redirect(base_url().'admin/urunler');	
	}
	public function resim_ekle($id)
	{
		
		$data["id"]=$id;
		$this->load->view('admin/urunler_resim_ekle',$data);
	}
	public function resim_ekle_kaydet($id)
	{
		
		$data["id"]=$id;
		$config['upload_path']    ='./uploads/';
		$config['allowed_types']    ='gif|jpg|png';
		$config['max_size']          =2048 ;
		$config['max_width']          = 2048;
		$config ['max_height']        =2048;
		$this->load->library('upload' ,$config);
		if (!$this->upload->do_upload('resim'))
		{
			 $error = array ('error' => $this->upload->display_errors());
			 print_r($error);
			 $this->session->set_flashdata("mesaj","Resim istenilen kritere uygun değil");
			   $this->load->view('admin/urunler_resim_ekle', $data);
		}
		else
	 {
			$upload_data=$this->upload->data();
			$file_name=$upload_data['file_name'];
	    {
	    //Form verilerini alıcaz
		$data=array(
		 'resim'=> $file_name
		
		  );
		 // print_r($data);
		  //exit();
		 $this->load->model('Database_Model');
		 $this->Database_Model->update_data("urunler",$data,$id);
		  $this->session->set_flashdata("mesaj","Resim Yüklendi ", $file_name);
		redirect(base_url().'admin/urunler');
	    }
     }
	
	
	
	}
	public function resim_galeri_ekle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["veriler"]=$query->result();
		$data["id"]=$id;
		$this->load->view('admin/urunler_resim_galeri_ekle',$data);
	}
	public function resim_galeri_ekle_kaydet($id)
	{
		
		$data["id"]=$id;
		$config['upload_path']    ='./uploads/';
		$config['allowed_types']    ='gif|jpg|png';
		$config['max_size']          =2048 ;
		$config['max_width']          = 2048;
		$config ['max_height']        =2048;
		$this->load->library('upload' ,$config);
		if (!$this->upload->do_upload('resim'))
		{
			 $error = array ('error' => $this->upload->display_errors());
			 print_r($error);
			 $this->session->set_flashdata("mesaj","Resim istenilen kritere uygun değil");
			redirect(base_url()."admin/urunler/resim_galeri_ekle/$id ");
		}
		else
	 {
			$upload_data=$this->upload->data();
			$file_name=$upload_data['file_name'];
	    {
	    //Form verilerini alıcaz
		$data=array(
		 'urun_id'=> $id,
		 'resim'=> $file_name
		
		  );
		 // print_r($data);
		  //exit();
		 $this->load->model('Database_Model');
		 $this->Database_Model->insert_data("urunler_resim",$data);
		  $this->session->set_flashdata("mesaj","Resim Yüklendi ", $file_name);
		redirect(base_url()."admin/urunler/resim_galeri_ekle/$id ");
	    }
     }
	}
		public function delete_resim($id,$resim_id)
	{
		$this->db->query("DELETE FROM urunler_resim WHERE Id=$resim_id");
		$this->session->set_flashdata("sonuc","Resim silme işlemi başarı ile gerçekleştirildi.");
		redirect(base_url()."admin/urunler/resim_galeri_ekle/$id ");
	}
	
	
	
}
