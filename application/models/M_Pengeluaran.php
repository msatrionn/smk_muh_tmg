<?php
class M_Pengeluaran extends CI_Model
{

	public function get_all_data($table, $search, $tgl_awal, $tgl_akhir)
	{
		if ($tgl_awal == null && $tgl_akhir == null) {
			return $this->db
				->select(['pengeluaran.id', 'pengeluaran.created_at', 'pengeluaran.id_barang', 'barang.nama_barang', 'pengeluaran.harga', 'pengeluaran.jumlah'])
				->join('barang', 'barang.id=pengeluaran.id_barang')
				->like("barang.nama_barang", $search)
				->or_like("pengeluaran.harga", $search)
				->or_like("pengeluaran.jumlah", $search)
				->get($table);
		}
		return $this->db
			->select(['pengeluaran.id', 'pengeluaran.created_at', 'pengeluaran.id_barang', 'barang.nama_barang', 'pengeluaran.harga', 'pengeluaran.jumlah'])
			->join('barang', 'barang.id=pengeluaran.id_barang')
			->like("barang.nama_barang", $search)
			->where('pengeluaran.created_at >=', $tgl_awal)
			->where('pengeluaran.created_at <=', $tgl_akhir)
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
