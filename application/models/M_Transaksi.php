<?php
class M_Transaksi extends CI_Model
{

	public function get_all_data($table, $search, $tgl_awal, $tgl_akhir)
	{
		if ($tgl_awal != null && $tgl_akhir != null) {
			return $this->db
				->join('pembeli', 'pembeli.id=transaksi.id_pembeli')
				// ->join('pembelian', 'pembelian.kode_pembelian=transaksi.id_pembelian')
				// ->join('barang', 'barang.id=pembelian.id_barang')
				->where('transaksi.created_at >=', $tgl_awal)
				->where('transaksi.created_at <=', $tgl_akhir)
				->get($table);
		} else {
			return $this->db
				->join('pembeli', 'pembeli.id=transaksi.id_pembeli')
				// ->join('pembelian', 'pembelian.kode_pembelian=transaksi.id_pembelian')
				// ->join('barang', 'barang.id=pembelian.id_barang')
				->like("pembeli.nama", $search)
				->or_like("pembeli.nama", $search)
				->or_like("transaksi.jumlah", $search)
				->or_like("transaksi.total_harga", $search)
				->get($table);
		}
	}
	public function insert_pembelian($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function insert_transaksi($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function updated_data($id, $table, $data)
	{
		return $this->db->where('id', $id)
			->update($table, $data);
	}
}
