<?php
class Hasil extends CI_Controller
{
	function __construct(){
        parent::__construct();
        $this->load->model('M_Hasil','model');
    }
	public function index($id){
		$data['hasil']=$this->model->index('lamaran',$id)->result();
		$this->load->view('clients/layouts/header.php');
		$this->load->view('kandidat.php',$data);
		$this->load->view('clients/layouts/footer.php');
	}
	public function update_hasil($id){
		$data=[
			'hasil'=>$this->input->post('hasil')
		];
		$this->model->update_data($id,$data,'lamaran');
		redirect('hasil/index/'.$id);
	}
}
