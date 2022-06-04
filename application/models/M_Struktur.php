<?php
class M_Struktur extends CI_Model
{
	function get_struktur(){
        $query = $this->db->get('struktur')->result();
        return $query;
    }
	function get_struktur_edit($id){
        $query = $this->db->where('id',$id)->get('struktur')->row();
        return $query;
    }
	function save_struktur_data($table,$data){
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
