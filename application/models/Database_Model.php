<?php
class Database_Model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function login($tablo,$email,$sifre)
	{
		$this->db->select("*");
		$this->db->from($tablo);
		$this->db->where('email' ,$email);
		$this->db->where('sifre' , $sifre);
		
		$this->db->limit(1);
		
		$query=$this->db->get();  //verileri getir
				if ($query->num_rows() ==1) 
				{
			 return $query->result();
		       } else
			 {
			return false;
		}
		
	}
	public function update_data($tablo,$data,$id) //id ve datası gönderilen verileri güncelle
	{
		
		$this->db->where('Id',$id);
		$this->db->update($tablo,$data);
		return true;
	}
	public function insert_data($tablo,$data){
		if($this->db->insert($tablo,$data)){
		return true;
		}
	}
	public function delete_data($tablo,$data){
		if($this->db->delete($tablo,"Id=".$id)){
		return true;
		}
	}
	function get_urunler()
	{
		$query=$this->db->query('SELECT urunler.*, kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler On urunler.kategori=kategoriler.Id
		order by adi');
		return $query->result();
	}
	function get_urun($id)
	{
		$query=$this->db->query('SELECT urunler.*, kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler On urunler.kategori=kategoriler.Id
		WHERE urunler.Id=' .$id );
		return $query->result();
	}
	
	function get_kategori($id){
		/*1. yol*/
		$query = $this->db->get_where('kategoriler', array('Id' => $id));
		return $query;
		/* 2.yol*/
		/*
		$query=$this->db->query('SELECT * FROM  kategoriler 	WHERE Id=' .$id );
		return $query->result(); */
	}
	

	
}
	

?>