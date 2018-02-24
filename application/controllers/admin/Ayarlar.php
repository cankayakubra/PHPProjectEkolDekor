<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {


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
	{$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/ayarlar', $data);
	 
	}

	public function ayarlar_guncelle($id)
	{
		
		$data=array(
		'adi'=> $this->input->post('adi'),
		'smtpemail'=> $this->input->post('smtpemail'),
		'sehir'=> $this->input->post('sehir'),
		'tel'=> $this->input->post('tel'),
		'keywords'=> $this->input->post('keywords'),
		'description'=> $this->input->post('description'),
		'name'=> $this->input->post('name'),
		'smtpserver'=> $this->input->post('smtpserver'),
		'smtpport'=> $this->input->post('smtpport'),
		'sifre'=> $this->input->post('sifre'),
		'adres'=> $this->input->post('adres'),
		'fax'=> $this->input->post('fax'),
		'email'=> $this->input->post('email'),
		'hakkimizda'=> $this->input->post('hakkimizda'),
		'iletisim'=> $this->input->post('iletisim'),
		'facebook'=> $this->input->post('facebook'),
		'twitter'=> $this->input->post('twitter'),
		'instegram'=> $this->input->post('instegram'),
		'pinterest'=> $this->input->post('pinterest'),
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);
		redirect(base_url().'admin/ayarlar');
	}
	
	
		

}
