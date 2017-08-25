<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Depan_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		
	}

	function populer()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		//$this->db->join('objek_wisata__rating', 'objek_wisata__rating.id__objek_wisata__rating = objek_wisata__post.id__objek_wisata__post', 'left');
        $this->db->limit(6);
		return $this->db->get()->result();
    }

	function rating()
    {
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		//$this->db->join('objek_wisata__rating', 'objek_wisata__rating.id__objek_wisata__rating = objek_wisata__post.id__objek_wisata__post', 'left');
        $this->db->limit(6);
		return $this->db->get()->result();
    }

	function objek_wisata($id_wisata)
	{
		$this->db->select('*');
		$this->db->from('objek_wisata__post');
		$this->db->where('id__objek_wisata__post', $id_wisata);
		return $this->db->get()->result();
	}

	function ulasanrating($id_wisata)
	{
		$this->db->select('objek_wisata__rating.jumlah__objek_wisata__rating, objek_wisata__ulasan.hasil__objek_wisata__ulasan');
		$this->db->from('objek_wisata__rating');
		$this->db->join('objek_wisata__ulasan', 'objek_wisata__ulasan.id__objek_wisata__ulasan = objek_wisata__rating.id__objek_wisata__rating', 'left');
		$this->db->order_by('objek_wisata__rating.id__objek_wisata__rating', "desc");
		$this->db->where('objek_wisata__rating.objek_wisata__post_id__objek_wisata__post', $id_wisata);
		return $this->db->get()->result();
	}
	
	function jumlah_ulasan($id_wisata)
	{
		$this->db->select('*');
		$this->db->where('objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$query = $this->db->get('objek_wisata__ulasan');
		$num = $query->num_rows();
	}

	function ratarata_rating($id_wisata)
	{
		$this->db->select_avg('jumlah__objek_wisata__rating');
		$this->db->where('objek_wisata__rating.objek_wisata__post_id__objek_wisata__post', $id_wisata);
		$t = $this->db->get('objek_wisata__rating')->row();
        return $t->jumlah__objek_wisata__rating;
	}
}