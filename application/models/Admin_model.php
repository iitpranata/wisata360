<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		
	}
 
	function semua_postingan()
    {
		$this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		return $this->db->get()->result();
    }

    function objek_wisata($id_objekwisata){
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->where('id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }

    function semua_ulasan()
    {
		$this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
		return $this->db->get()->result();
    }

    function ulasan_objek_wisata($id_objekwisata)
    {
        $this->db->select('*');
        $this->db->from('objek_wisata__rating_ulasan');
        $this->db->join('objek_wisata__pengguna', 'objek_wisata__pengguna.oauth_uid = objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid', 'left');
        $this->db->where('objek_wisata__post_id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }

    function semua_pengguna(){
        $this->db->select('*');
        $this->db->from('objek_wisata__pengguna');
        return $this->db->get()->result();
    }

    function rating()
    {
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        $this->db->join('objek_wisata__rating', 'objek_wisata__rating.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
        return $this->db->get()->result();
    }

    function rating_objek_wisata($id_objekwisata){
        $this->db->select('*');
        $this->db->from('objek_wisata__rating_ulasan');
        $this->db->join('objek_wisata__pengguna', 'objek_wisata__pengguna.oauth_uid = objek_wisata__rating_ulasan.objek_wisata__pengguna_oauth_uid', 'left');
        $this->db->where('objek_wisata__post_id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }

    function sentiment_analysis()
    {
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        //$this->db->join('objek_wisata__rating_ulasan', 'objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
        return $this->db->get()->result();
    }

    function sentiment_analysis_objek_wisata($id_objekwisata)
    {
        $this->db->select('*');
        $this->db->from('objek_wisata__post');
        //$this->db->join('objek_wisata__rating_ulasan', 'objek_wisata__rating_ulasan.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'left');
        $this->db->join('objek_wisata__ulasan', 'objek_wisata__ulasan.objek_wisata__post_id__objek_wisata__post = objek_wisata__post.id__objek_wisata__post', 'right');
        $this->db->where('id__objek_wisata__post', $id_objekwisata);
        return $this->db->get()->result();
    }

    function jumlah_postingan(){
        $query = $this->db->query('SELECT * FROM objek_wisata__post');
        return $query->num_rows();
    }

    function jumlah_ulasan(){
        $query = $this->db->query('SELECT * FROM objek_wisata__rating_ulasan');
        return $query->num_rows();
    }

    function jumlah_pengguna(){
        $query = $this->db->query('SELECT * FROM objek_wisata__pengguna');
        return $query->num_rows();
    }

    function populer()
    {
		$query = $this->db->query("SELECT *, `floor__objek_wisata__rating` + `ulasan__objek_wisata__rating` AS `populer` FROM objek_wisata__post INNER JOIN objek_wisata__rating ON objek_wisata__post.id__objek_wisata__post = objek_wisata__rating.objek_wisata__post_id__objek_wisata__post ORDER BY `populer` DESC LIMIT 1");
		return $query->result();
    }

    function tidak_populer()
    {
		$query = $this->db->query("SELECT *, `floor__objek_wisata__rating` + `ulasan__objek_wisata__rating` AS `populer` FROM objek_wisata__post INNER JOIN objek_wisata__rating ON objek_wisata__post.id__objek_wisata__post = objek_wisata__rating.objek_wisata__post_id__objek_wisata__post ORDER BY `populer` ASC LIMIT 1");
		return $query->result();
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
    
    function tf_idf(){
        $data = array();

        $this->db->from('objek_wisata__ulasan');
        $this->db->where('objek_wisata__post_id__objek_wisata__post', $this->uri->slash_segment(3));
        $q = $this->db->get();
		foreach($q->result() as $row){
			$data[] = $row->stemmed__objek_wisata__ulasan;
		}
		return $data;

    }
}