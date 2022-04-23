<?php
class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Transaksi', 'model');
	}
	public function index()
	{
		$data['pembeli'] = $this->db->get('pembeli')->result();
		$data['barang'] = $this->db->get('barang')->result();
		$this->load->view('layouts/head.php');
		$this->load->view('transaksi/index.php', $data);
		$this->load->view('layouts/foot.php');
	}
	public function table()
	{
		$search = $this->input->post('search');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data['transaksi'] = $this->model->get_all_data('transaksi', $search, $tgl_awal, $tgl_akhir)->result();
		$this->load->view('transaksi/table.php', $data);
	}
	public function detail()
	{
		$data['detail'] = $this->db
			->select(['pembelian.id', 'barang.id as id_barang', 'barang.nama_barang', 'pembelian.jumlah', 'pembelian.harga'])
			->join('barang', 'barang.id=pembelian.id_barang')
			->where('pembelian.kode_pembelian', $this->input
				->get('param'))
			->get('pembelian')
			->result();
		$data['barang'] = $this->db->get('barang')->result();
		$this->load->view('transaksi/detail.php', $data);
	}
	public function save_transaksi()
	{
		$kode = $this->db->select_max('kode_pembelian')->from('pembelian')->get()->row();
		$get_kode = $kode ? $kode->kode_pembelian + 1 : 1;

		for ($i = 0; $i < count($this->input->post('barang')); $i++) {
			$data = [
				'kode_pembelian' 	=> $get_kode,
				'id_barang' 		=> $this->input->post('barang')[$i],
				'harga' 			=> $this->input->post('harga')[$i],
				'jumlah' 			=> $this->input->post('stok')[$i],
			];
			$total_harga[] = $this->input->post('harga')[$i];
			$total_jumlah[] = $this->input->post('stok')[$i];
			$this->model->insert_pembelian('pembelian', $data);
		}
		$datas = [
			'id_pembelian' 	=> $get_kode,
			'id_pembeli' 	=> $this->input->post('pembeli'),
			'total_harga' 	=> array_sum($total_harga),
			'jumlah' 	=> array_sum($total_jumlah),
		];
		$this->model->insert_transaksi('transaksi', $datas);

		return redirect('Transaksi');
	}
	public function edit_barang()
	{
		$data = [
			'id_barang' 		 => $this->input->post('barang'),
		];
		var_dump($data, $this->input->post('id'));
		$this->db->where('id', $this->input->post('id'))
			->update('pembelian', $data);
	}
	public function edit_harga()
	{
		$data = [
			'harga' 		 => $this->input->post('harga'),
		];
		var_dump($data, $this->input->post('id'));
		$this->db->where('id', $this->input->post('id'))
			->update('pembelian', $data);
	}
	public function edit_jumlah()
	{
		$data = [
			'jumlah' 		 => $this->input->post('jumlah'),
		];
		var_dump($data, $this->input->post('id'));
		$this->db->where('id', $this->input->post('id'))
			->update('pembelian', $data);
	}
	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('pembelian', ['kode_pembelian' => $id]);
		$this->db->delete('transaksi', ['id_pembelian' => $id]);
	}
}
