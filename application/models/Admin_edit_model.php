<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_edit_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function objek_wisata($id_objekwisata, $objek_wisata){
		$this->db->where('id__objek_wisata__post', $id_objekwisata);
		$this->db->update('objek_wisata__post', $objek_wisata);
	}

	function hapus_objek_wisata($id_objekwisata)
	{
		$tables = array('objek_wisata__rating_ulasan', 'objek_wisata__rating', 'objek_wisata__ulasan');
		$this->db->where('objek_wisata__post_id__objek_wisata__post', $id_objekwisata);
		$this->db->delete($tables);
	}

	function ulasan($id_ulasan, $ulasan){
		$this->db->where('id__objek_wisata__ulasan', $id_ulasan);
		$this->db->update('objek_wisata__ulasan', $ulasan);
	}
}