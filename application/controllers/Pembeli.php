<?php
class Pembeli extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pembeli', 'model');
	}
	public function index()
	{
		$this->load->view('layouts/head.php');
		$this->load->view('pembeli/index.php');
		$this->load->view('layouts/foot.php');
	}
	public function table()
	{
		$search = $this->input->post('search');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data['pembeli'] = $this->model->get_all_data('pembeli', $search, $tgl_awal, $tgl_akhir)->result();
		$this->load->view('pembeli/table.php', $data);
	}
	public function insert()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
		];
		$this->model->insert_data('pembeli', $data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'updated_at' => date("Y-m-d h:i:s"),
		];
		return $this->model->updated_data($id, 'pembeli', $data);
	}
	public function delete()
	{
		$id = $this->input->post('id');
		return $this->model->deleted_data(['id' => $id], 'pembeli');
	}
}
