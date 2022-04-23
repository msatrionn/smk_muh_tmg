<?php
class M_Alumni extends CI_Model
{
	public function index($table){
		return $this->db->get($table);
	}
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function get_alumni_edit($id){
        $query = $this->db->where('id_alumni',$id)->get('alumni')->row();
        return $query;
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_alumni', $id)
			->update($table, $data);
	}
	public function deleted_data($id, $table)
	{
		return $this->db->where('id_alumni', $id)->delete($table);
	}
}
