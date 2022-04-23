<?php
class M_Post extends CI_Model{
    
    //ambil data post dari database
    function get_post_list($limit, $start){
        $query = $this->db->get('berita', $limit, $start);
        return $query;
    }
	function get_post(){
        $query = $this->db->get('berita')->result();
        return $query;
    }
	function get_post_edit($id){
        $query = $this->db->where('id',$id)->get('berita')->row();
        return $query;
    }
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function updated_data($id,$table,$data){
		return $this->db->where('id', $id)
			->update($table, $data);
	}
	public function deleted_data($id, $table)
	{
		return $this->db->where('id', $id)->delete($table);
	}
} 
