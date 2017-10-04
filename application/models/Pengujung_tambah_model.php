<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengujung_tambah_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function objek_wisata__rating_ulasan($objek_wisata_rating_ulasan){
		$this->db->insert('objek_wisata__rating_ulasan', $objek_wisata_rating_ulasan);
	}

	function ratarata_rating($id_objekwisata)
	{
		$this->db->select_avg('rating__objek_wisata__rating_ulasan');
		$this->db->where('objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post', $id_objekwisata);
		$t = $this->db->get('objek_wisata__rating_ulasan')->row();
        return $t->rating__objek_wisata__rating_ulasan;
	}

	function objek_wisata__auto($objek_wisata__auto, $id_objekwisata){
		$this->db->where('objek_wisata__post_id__objek_wisata__post', $id_objekwisata);
		$this->db->update('objek_wisata__rating', $objek_wisata__auto);
	}
}