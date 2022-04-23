<?php
class M_Pembeli extends CI_Model
{

	public function get_all_data($table, $search, $tgl_awal, $tgl_akhir)
	{
		if ($tgl_awal == null && $tgl_akhir == null) {
			return $this->db->like("nama", $search)
				->or_like("alamat", $search)
				->or_like("telp", $search)
				->get($table);
		}
		return $this->db->like("nama", $search)
			->where('created_at >=', $tgl_awal)
			->where('created_at <=', $tgl_akhir)
			->get($table);
	}
	public function insert_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function updated_data($id, $table, $data)
	{
		return $this->db->where('id', $id)
			->update($table, $data);
	}
	public function deleted_data($id, $table)
	{
		return $this->db->delete($table, $id);
	}
}
