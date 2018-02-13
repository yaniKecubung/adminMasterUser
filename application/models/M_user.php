<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	var $tableUser = 'admin';
	
	public function select_all_admin(){
		return $this->db->query("select * from admin")->result();
	}
	
	public function get_by_id($id){
		$this->db->from($this->tableUser);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();
	}
	
	
}