<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('lowongan_detail');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data(){
		return $this->db->get('lowongan_detail');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}