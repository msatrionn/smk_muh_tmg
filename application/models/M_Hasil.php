<?php
class M_Hasil extends CI_Model 
{
	public function index($table){
		return $this->db
		->select('
		lamaran.id_lamaran,
		lowongan.id_lowongan,lamaran.cv,
		lamaran.keterangan_kandidat,alumni.nama_alumni,alumni.alamat_alumni, 
		alumni.no_hp as telp_alumni, lamaran.hasil')
		->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan')
		->join('perusahaan','perusahaan.id_perusahaan=lowongan.id_perusahaan')
		->join('alumni','alumni.id_alumni=lamaran.id_alumni')
		->get($table);	
	}
	public function update_data($id,$data,$table){
		return $this->db->where('id_lamaran',$id)->update($table,$data);
	}
}
