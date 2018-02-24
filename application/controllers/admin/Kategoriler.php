<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->model("Database_Model");
		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'admin/login');
	}
	public function index()
	{
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY parent_id");
		$data["veriler"]=$query->result();	
		
		
		
		
		//$data["veriler"]=$this->Database_Model->get_urunler();
		//$data["veriler"]=$this->Database_Model->get_markalar();
		
		
		$this->load->view('admin/kategoriler_liste',$data);
	}
	
	public function ekle()
	{
		
		/*$query=$this->db->query("SELECT * FROM kategoriler");
		$data["kategoriler"]=$query->result();	
		
		$query=$this->db->query("SELECT * FROM markalar");
		$data["markalar"]=$query->result();	*/
		
		$this->load->view('admin/kategoriler_ekle');
	}
	
	public function ekle_kaydet()
	{
		$data=array(
		'parent_id'=>$this->input->post('parent_id'),
		'adi'=>$this->input->post('adi'),
		'description'=>$this->input->post('description'),
		'keywords'=>$this->input->post('keywords'),
		'resim'=>$this->input->post('resim'),
		'durum'=>$this->input->post('durum')
		);
		
		$this->db->insert("kategoriler",$data);
		$this->session->set_flashdata("mesaj","Ürün kaydedildi.");
		redirect(base_url().'admin/kategoriler');
		
	}
    public function duzenle($id)
	{
      	/*$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();	
		
		$query=$this->db->query("SELECT * FROM markalar");
		$data["markalar"]=$query->result();	*/
		
		//$data["veri"]=$this->Database_Model->get_urun($id);
		
		//$data["veri"]=$this->Database_Model->get_marka($id);
		
		$query=$this->db->query("SELECT * FROM kategoriler WHERE Id='$id'");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/kategoriler_duzenle_formu',$data);
    }
	public function guncelle($id)
	{
		$data=array(
		'parent_id'=>$this->input->post('parent_id'),
		'adi'=>$this->input->post('adi'),
		'description'=>$this->input->post('description'),
		'keywords'=>$this->input->post('keywords'),
		'resim'=>$this->input->post('resim'),
		'durum'=>$this->input->post('durum')
		);
		
		$this->Database_Model->update_data("kategoriler",$data,$id);
		$this->session->set_flashdata("mesaj","Ürün güncellendi.");
		redirect(base_url().'admin/kategoriler');
	}
	
	public function sil($id)
	{
        $query=$this->db->query("DELETE  FROM kategoriler WHERE Id='$id' ");
		$this->session->set_flashdata("mesaj","Ürün silindi.");
		redirect(base_url().'admin/kategoriler');
    }
	
	
	public function resim_ekle($id)
	{
		
		$data["id"]=$id;
		$this->load->view('admin/kategoriler_resim_ekle',$data);
	}
	public function resim_ekle_kaydet($id)
	{
		
		$data["id"]=$id;
		$config['upload_path']    ='./uploads/';
		$config['allowed_types']    ='gif|jpg|png';
		$config['max_size']          =1024 ;
		$config['max_width']          = 1024;
		$config ['max_height']        =1024;
		$this->load->library('upload' ,$config);
		if (!$this->upload->do_upload('resim'))
		{
			 $error = array ('error' => $this->upload->display_errors());
			 print_r($error);
			 $this->session->set_flashdata("mesaj","Resim istenilen kritere uygun değil");
			   $this->load->view('admin/kategoriler_resim_ekle', $data);
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
		 $this->Database_Model->update_data("kategoriler",$data,$id);
		  $this->session->set_flashdata("mesaj","Resim Yüklendi ", $file_name);
		redirect(base_url().'admin/kategoriler');
	    }
     }
	
	
	
	}
}
