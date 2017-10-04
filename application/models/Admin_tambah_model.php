<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_tambah_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function objek_wisata($objek_wisata){
		$this->db->insert('objek_wisata__post', $objek_wisata);
		return $this->db->insert_id();
	}

	function objek_wisata__rating($objek_wisata_rating){
		$this->db->insert('objek_wisata__rating', $objek_wisata_rating);
	}
}