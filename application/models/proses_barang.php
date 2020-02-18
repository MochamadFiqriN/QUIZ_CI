<?php

class proses_barang extends CI_Model{
	function tampil_data(){
		$query = $this->db->get('data');
	}

	function input_data($data,$table){
	$this->db->insert($table,$data);	
	}

}