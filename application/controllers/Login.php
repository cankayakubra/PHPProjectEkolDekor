<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	  public function __construct()
        {
                parent::__construct();
               $this->load->helper('url');  
			   $this->load->database();
			   $this->load->library("session");
			   
        }
	public function index()
	{	
		
			$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Login ||";
		$data["menu"]="login";
		$this->load->view('_header',$data);
		$this->load->view('login_form');
	}
	public function login_ol()
	{
	$email=$this->input->post("eposta");
	$sifre=$this->input->post("sifre");
	//zararlı kodları temizleme
	 $email =$this->security->xss_clean($email);
	 $sifre=$this->security->xss_clean($sifre);
	$this->load->model('Database_Model');
	
	$result=$this->Database_Model->login("uyeler",$email,$sifre);
	
	if ($result)
	{
		//Kullanıcı var ise bilgileri diziye aktarıyor
		$sess_array = array(
		'id' => $result[0]->Id,
		'yetki' => $result[0]->yetki,
		'email' => $result[0]->email,
		'adsoy' => $result[0]->adsoy,
		'resim' => $result[0]->resim
		);
		//session değişkenine atamak
		//print_r($sess_array);
		
		$this->session->set_userdata("uye_session", $sess_array);
		redirect(base_url());
	}
	else
	{
		$this->session->set_flashdata("mesaj" , "Hatalı Kullanıcı Adı yada sifre");
		redirect(base_url().'login');
	}
	}
	
		public function uyekayit()
	{
	
        $data=array(
		 'adsoy'=>$this->input->post('adsoy'),
		  'email'=>$this->input->post('email'),
		
		  'sifre'=>$this->input->post('sifre'),
		  'tel'=>$this->input->post('tel'),
		   'durum'=>$this->input->post('durum'),
		  
		 
		  );
		  $this->db->insert("uyeler",$data);
		  $this->session->set_flashdata("mesaj","üye kaydı gerçekleşti");
		  //mail
		  
		  //mail son
		  
		  
		  
		  
		 
		  $this->session->set_userdata("uye_session", $sess_array);
		redirect(base_url().'login');
		
	}
	public function login_cik()
	{
	  $this->session->unset_userdata("uye_session" );
	  redirect(base_url().'home');
	}
	
 
}
