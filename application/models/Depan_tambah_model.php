<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Depan_tambah_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function objek_wisata__rating($objek_wisata_rating){
		$this->db->insert('objek_wisata__rating', $objek_wisata_rating);
	}

	function objek_wisata__ulasan($objek_wisata_ulasan){
		$this->db->insert('objek_wisata__ulasan', $objek_wisata_ulasan);
	}

	function jumlah_rating($rating_wisata, $id_objekwisata){
		$this->db->where('id__objek_wisata__post', $id_objekwisata);
		$this->db->update('objek_wisata__post', $rating_wisata);
	}
}