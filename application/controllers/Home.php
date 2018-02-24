<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct()
        {
                parent::__construct();
				 $this->load->model('Database_Model');
               $this->load->helper('url'); 
			   $this->load->library("session");
              
                				
        }
	
	public function index($info='')
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
		$data["yeni"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 3");
		$data["random"]=$query->result();
		
		
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Anasayfa ||";
		$data["menu"]="anasayfa";
		$this->load->view('_header',$data);
		
		$this->load->view('_sidebar');
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	
	public function hakkimizda()
	{
		$query=$this->db->query(" SELECT * FROM  kategoriler ORDER BY adi ");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		$this->load->view('hakkimizda',$data);
		
		
		
	}
	public function kampanyalar()
	{
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		$query=$this->db->query(" SELECT * FROM  kategoriler ORDER BY adi ");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
	$data["sayfa"]="Kampanyalar ||";
	$data["menu"]="kampanyalar";
		$this->load->view('kampanyalar',$data);
		
		
	}
	public function iletisim()
	{
		$query=$this->db->query(" SELECT * FROM  kategoriler ORDER BY adi ");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim ||";
		$data["menu"]="iletisim";
		$this->load->view('iletisim',$data);
		
		
	}
	public function bize_yazin()
	{
		$query=$this->db->query(" SELECT * FROM  kategoriler ORDER BY adi ");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın ||";
		$data["menu"]="bize_yazin";
		$this->load->view('bize_yazin',$data);
		
		
	}
	public function mesaj_kaydet()
	{
	    //Form verilerini alıcaz
		$data=array(
		 'adsoy'=> $this->input->post('adsoy'),
		  'email'=>$this->input->post('eposta'),
		  'tel'=>$this->input->post('tel'),
		'mesaj'=>$this->input->post('konu'),
		'ip'=>$_SERVER['REMOTE_ADDR']
		  );
		  $this->db->insert("mesaj",$data);
		  
		  $adsoy=$this->input->post('adsoy');
		$email=$this->input->post('eposta');
	    
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		/*
		$config=Array(
		'protocol' => 'smtp',
		 'smtp_host'=>'smtp.gmail.com',//data["veri"][0]->smtpserver,
		'smtp_port'=>'465',//$data["veri"][0]->smtpport,
		'smtp_user'=>'alisveriszamaniphp@gmail.com',//$data["veri"][0]->smtpemail,
		'smtp_pass'=>'Engineer',//$data["veri"][0]->sifre,
		'mailtype'=>'html',
		'charset'=>'utf-8',
		 'smtp_crypto' =>'ssl',
		
		);
		
	*/
	//smtp-mail.outlook.com
	//587
	
	    $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp-mail.outlook.com',//$data["veri"][0]->smtpserver,
                'smtp_port' => '587',//$data["veri"][0]->stmpport, 
                'smtp_user' => 'neslihanhosgorul@hotmail.com',
                'smtp_pass' => 'Engineer_nesli',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'smtp_crypto' =>'tls',
                );
	
		$mesaj="Sayın: ".$adsoy."<br> Üyeliğinizin aktive edilebilmesi için aşağıdaki linke tıklayınız ya da adresi kopyalayıp adres çubuğuna yapıştırınız.<br>";
		$mesaj.="==================================================================<br>";
	
		
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="gonderdiğiniz mesaj<br>===============<br>";
		$mesaj.=$this->input->post('mesaj');
		
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject($data["veri"][0]->name. "Form alındı mesajı");
		$this->email->message($mesaj);
		$result = $this->email->send();
		//echo $this->email->print_debugger();
		//echo "Cevap:" . $result;
		if($result)
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
		else
		{
			$this->session->set_flashdata("email_sent","Email göndermede hata oluştu!!!");
			show_error($this->email->print_debugger());
		}
		  
		 
		   $this->session->set_flashdata("mesaj","Mesajınız Başarılı Bir şekilde Gönderildi");
		  redirect(base_url().'home/bize_yazin');
	}
	
	
	public function urundetay($id)
	{
		$query=$this->db->query(" SELECT * FROM  kategoriler ORDER BY adi ");
		$data["kategoriler"]=$query->result();
		$data["menu"]="urun";
		$data["sayfa"]=null;
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		
		$this->load->view('urun_detay',$data);
		
	}
	
	public function sepete_ekle($id)
	{
		{
			if(!$this->session->userdata('uye_session'))
	         if (!$this->session->userdata("uye_session") )	//Login olup olmadığı kontrolü
                    redirect(base_url().'login');					
        }
	
	    //Form verilerini alıcaz
		$data=array(
		 'uye_id'=> $this->session->uye_session['id'],
		  'urun_id'=>$id,
		  'miktar'=>$this->input->post('miktar'),
		  
		 
		  );
		  $this->Database_Model->insert_data("sepet",$data);
		  $this->session->set_flashdata("mesaj","Ürün sepete eklendi");
		  redirect(base_url()."home/urundetay/$id");
	
	}
	public function sepetim()
	{
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepet ||";
		$data["menu"]="sepetim";
	if(!$this->session->userdata('uye_session'))
	{
		$this->session->set_flashdata('mesaj','Giriş Yapınız!');
		redirect(base_url()."login");
	}	
	     $uye_id=$this->session->uye_session["id"];
         $query=$this->db->query("select * from ayarlar limit 1");
         $data["veri"]=$query->result();
		 
		  $query=$this->db->query("select * from uyeler WHERE Id=$uye_id limit 1");
         $data["uye"]=$query->result();
		  $uye_id=$this->session->uye_session["id"];
		  $query=$this->db->query("SELECT sepet.*, urunler.adi as uadi ,urunler.sfiyat as ufiyat,urunler.birim as ubirim
		FROM sepet
		INNER JOIN urunler On urunler.Id=urun_id
		WHERE sepet.uye_id=$uye_id		
		order by uadi" );
	$data["veriler"]=$query->result();
	$this->load->view('uye_sepet',$data);
	
	}
		public function sepetsil($id)
	{
			$this->db->query("DELETE FROM sepet WHERE id=$id");
			  redirect(base_url().'home/sepetim');	
	}
		public function siparis_tamamla()
	{
		 $uye_id=$this->session->uye_session["id"];
		 //Banka kredi kartı ödeme tutarı onayı 
	   $data=array(
		 'adsoy'=> $this->input->post('adsoy'),
		  'adres'=>$this->input->post('adres'),
		  'sehir'=>$this->input->post('sehir'),
		  'tel'=>$this->input->post('tel'),
		  'tutar'=>$this->input->post('tutar'),
		  'uye_id'=>$uye_id,
			'ip'=>$_SERVER['REMOTE_ADDR']
		
		 
		  );
		 $siparis_id=$this->Database_Model->insert_data("siparisler",$data);
		 if($siparis_id)
		 {
		$query=$this->db->query("SELECT sepet.*, urunler.adi as uadi ,urunler.sfiyat as ufiyat,urunler.birim as ubirim
		FROM sepet
		INNER JOIN urunler On urunler.Id=urun_id
		WHERE sepet.uye_id=$uye_id		
		order by uadi" );
		$veriler=$query->result();
		foreach ($veriler as $rs)
		{
			$data=array(
		 'uye_id'=>$this->session->uye_session["id"],
		  'siparis_id'=>$siparis_id,
		   'urun_id'=>$rs->Id,
		  'adi'=>$rs->uadi,
		  'miktar'=>$rs->miktar,
		  'fiyat'=>$rs->ufiyat,
		  'birim'=>$rs->ubirim,
		  'tutar'=>$rs->miktar* $rs->ufiyat
		  
		  
		  );
		    $this->Database_Model->insert_data("siparis_urunler",$data);
			
		  }
		 } //urun if if
	      $query=$this->db->query("DELETE FROM sepet WHERE uye_id=$uye_id"); //SEPETİ BOŞALT
		  $this->session->set_flashdata("mesaj","Siparişiniz tamamlanmıştır.");
		  redirect(base_url().'uye/siparisler');	
	}
		public function siparis_detay($id)
	{
		$query=$this->db->query(" SELECT * FROM  ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepet ||";
		$data["menu"]="sepetim";
	if(!$this->session->userdata('uye_session'))
	{
		$this->session->set_flashdata('mesaj','Giriş Yapınız!');
		redirect(base_url()."uye/login");
	}	
	     $uye_id=$this->session->uye_session["id"];
         $query=$this->db->query("select * from ayarlar limit 1");
         $data["veri"]=$query->result();
		 
		 $uye_id=$this->session->uye_session["id"];
		$query=$this->db->query(" select * from  siparisler WHERE Id=$id"	);
		 $data["siparis"]=$query->result();
		 	$query=$this->db->query(" select * from  siparis_urunler WHERE siparis_id=$id"	);
		 $data["urunler"]=$query->result();
		 $this->load->view('siparisler_detay',$data); 
	}

}
