<?php
class M_Lamaran extends CI_Model 
{
	public function index($id,$table){
		return $this->db->join('alumni','alumni.id_alumni=lamaran.id_alumni')
		->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan')
		->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')
		->where('lamaran.id_alumni',$id)->get($table);
	}
	public function save_lamaran($table, $data){
		return $this->db->insert($table, $data);
	}

}
