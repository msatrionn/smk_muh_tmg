<?php
class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Barang', 'model');
	}
	public function index()
	{
		$this->load->view('layouts/head.php');
		$this->load->view('barang/index.php');
		$this->load->view('layouts/foot.php');
	}
	public function table()
	{
		$search = $this->input->post('search');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data['barang'] = $this->model->get_all_data('barang', $search, $tgl_awal, $tgl_akhir)->result();
		$this->load->view('barang/table.php', $data);
	}
	public function insert()
	{
		$data = [
			'nama_barang' => $this->input->post('nama'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'berat' => $this->input->post('berat'),
		];
		$this->model->insert_data('barang', $data);
	}
	public function update()
	{
		
		
	}
	public function delete()
	{
		$id = $this->input->post('id');
		return $this->model->deleted_data(['id' => $id], 'barang');
	}
}
