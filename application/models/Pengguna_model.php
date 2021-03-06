<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengguna_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		
	}

	function profil($id_pengguna){
		$this->db
		->select('*')
		->from('objek_wisata__pengguna')
		->where('oauth_uid', $id_pengguna);
		return $this->db->get()->result();
	}

	function populer()
    {
		$query = $this->db->query("SELECT *, `floor__objek_wisata__rating` + `ulasan__objek_wisata__rating` AS `populer` FROM objek_wisata__post INNER JOIN objek_wisata__rating ON objek_wisata__post.id__objek_wisata__post = objek_wisata__rating.objek_wisata__post_id__objek_wisata__post ORDER BY `populer` DESC LIMIT 6");
		return $query->result();
	}
	
	function populer_semua()
    {
		$query = $this->db->query("SELECT *, `floor__objek_wisata__rating` + `ulasan__objek_wisata__rating` AS `populer` FROM objek_wisata__post INNER JOIN objek_wisata__rating ON objek_wisata__post.id__objek_wisata__post = objek_wisata__rating.objek_wisata__post_id__objek_wisata__post ORDER BY `populer` DESC LIMIT 6");
		return $query->result();
    }

	function rating()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->order_by('floor__objek_wisata__rating', 'DESC');
		$this->db->limit(6);
		return $this->db->get()->result();
	}

	function rating_semua()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->order_by('floor__objek_wisata__rating', 'DESC');
		return $this->db->get()->result();
	}

	function ulasan()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->order_by('ulasan__objek_wisata__rating', 'DESC');
		$this->db->limit(6);
		return $this->db->get()->result();
	}

	function ulasan_semua()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->order_by('ulasan__objek_wisata__rating', 'DESC');
		return $this->db->get()->result();
	}

	function terima_kasih()
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->limit(3);
		$this->db->order_by('id__objek_wisata__post', 'RANDOM');
		return $this->db->get()->result();
	}

	function destinasi_lain($id_wisata)
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->limit(3);
		$this->db->order_by('id__objek_wisata__post', 'RANDOM');
		$this->db->where_not_in('id__objek_wisata__post', $id_wisata);
		return $this->db->get()->result();
	}

	function objek_wisata($id_wisata)
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		$this->db->where('id__objek_wisata__post', $id_wisata);
		return $this->db->get()->result();
	}

	function ulasanrating($id_wisata)
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__rating_ulasan');
		$this->db->order_by('objek_wisata__rating_ulasan.id__objek_wisata__rating_ulasan', "desc");
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$this->db->join('objek_wisata__pengguna', 'objek_wisata__pengguna.oauth_uid = objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid');
		return $this->db->get()->result();
	}

	function sudah_ulasan($id_wisata,$id_pengguna)
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__rating_ulasan');
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid', $id_pengguna);
		$this->db->join('objek_wisata__pengguna', 'objek_wisata__pengguna.oauth_uid = objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid');
		return $this->db->get()->result();
	}

	function cek_ulasan($id_wisata,$id_pengguna)
	{
		$this->db->from('objek_wisata__rating_ulasan');
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid', $id_pengguna);
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$query = $this->db->get();
		$ret = $query->row();
		if(isset($ret->objek_wisata__pengguna_oauth_uid) == ""){
			return $a = "0";
		}else{
			return $ret->objek_wisata__pengguna_oauth_uid;
		}
	}
	
	function jumlah_ulasan($id_wisata)
	{
		$this->db->select('*');
		$this->db->where('objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$query = $this->db->get('objek_wisata__rating_ulasan');
		$num = $query->num_rows();
	}

	function cf()
    {
		$data = array();
		
		$this->db->from('objek_wisata__rating_ulasan');
		$this->db->join('objek_wisata__pengguna', 'objek_wisata__pengguna.oauth_uid = objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid');
		$this->db->join('objek_wisata__post', 'objek_wisata__post.id__objek_wisata__post = objek_wisata__rating_ulasan.	objek_wisata__post_id__objek_wisata__post');
		$q = $this->db->get();
		foreach($q->result() as $row){
			$data[$row->first_name." ".$row->last_name][$row->nama__objek_wisata__post." ".$row->objek_wisata__post_id__objek_wisata__post] = $row->rating__objek_wisata__rating_ulasan;
		}
		return $data;
	}

	function nilai_ulasan(){
		$query = $this->db->query("SELECT `ulasan_objek_wisata__ulasan`, COUNT(`ulasan_objek_wisata__ulasan`) AS `value_occurrence` FROM `objek_wisata__ulasan` WHERE `objek_wisata__post_id__objek_wisata__post` = 1 GROUP BY `ulasan_objek_wisata__ulasan` ORDER BY `value_occurrence` DESC LIMIT 1");
		foreach($query->result() as $row){
			$data = $row->ulasan_objek_wisata__ulasan;
		}
	}
	
	function pencarian_wisata($keyword)
	{
		$this->db->like('nama__objek_wisata__post',$keyword);
		$this->db->from('objek_wisata__post');
		$this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		return $this->db->get()->result();
	}

}