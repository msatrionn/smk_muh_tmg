<?php
class Pengeluaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pengeluaran', 'model');
	}
	public function index()
	{
		$data['barang'] = $this->db->get('barang')->result();
		$this->load->view('layouts/head.php');
		$this->load->view('pengeluaran/index.php', $data);
		$this->load->view('layouts/foot.php');
	}
	public function table()
	{
		$search = $this->input->post('search');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data['barang'] = $this->db->get('barang')->result();
		$data['pengeluaran'] = $this->model->get_all_data('pengeluaran', $search, $tgl_awal, $tgl_akhir)->result();
		$this->load->view('pengeluaran/table.php', $data);
	}
	public function show_barang()
	{

		$data['detail'] = $this->db->where('id', $this->input->get('id_barang'))->get('barang')->row();
		$data['barang'] = $this->db->get('barang')->result();
		$this->load->view('pengeluaran/show_barang.php', $data);
	}
	public function insert()
	{
		$data = [
			'id_barang' => $this->input->post('id_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
		];
		$add_barang = [
			'stok' => $this->db->where('id', $this->input->post('id_barang'))->get('barang')->row()->stok + $this->input->post('jumlah')
		];
		$this->model->insert_data('pengeluaran', $data);
		$this->db->where('id', $this->input->post('id_barang'))
			->update('barang', $add_barang);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$data = [
			'id_barang' => $this->input->post('id_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
		];
		$add_barang = [
			'stok' => $this->db->where('id', $this->input->post('id_barang'))->get('barang')->row()->stok + $this->input->post('jumlah_awal') - $this->input->post('jumlah')
		];
		$this->db->where('id', $this->input->post('id_barang'))
			->update('barang', $add_barang);
		return $this->model->updated_data($id, 'pengeluaran', $data);
	}
	public function delete()
	{
		$id = $this->input->post('id');
		return $this->model->deleted_data(['id' => $id], 'pengeluaran');
	}
}
