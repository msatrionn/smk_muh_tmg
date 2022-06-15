<?php
class M_Lowongan extends CI_Model
{
	public function index($id,$table){
		return $this->db->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')->where('perusahaan.id_perusahaan',$id)->get($table);
	}
	public function alumni_index($id,$table){
		return $this->db->join('alumni','alumni.id_alumni=lowongan.id_alumni')->where('lowongan.id_alumni',$id)->get($table);
	}
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function get_lowongan_edit($id){
        $query = $this->db->where('id_lowongan',$id)->get('lowongan')->row();
        return $query;
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_lowongan', $id)
			->update($table, $data);
	}
	public function deleted_data($id, $table)
	{
		return $this->db->where('id_perusahaan', $id)->delete($table);
	}

	public function get_user($id, $table)
	{
		return $this->db->where('user.id_user', $id)->join('user','perusahaan.id_user=user.id_user')->get($table);
	}

}
