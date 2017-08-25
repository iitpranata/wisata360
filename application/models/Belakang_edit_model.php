<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Belakang_edit_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function objek_wisata($id_objekwisata, $objek_wisata){
		$this->db->where('id__objek_wisata__post', $id_objekwisata);
		$this->db->update('objek_wisata__post', $objek_wisata);
	}
}