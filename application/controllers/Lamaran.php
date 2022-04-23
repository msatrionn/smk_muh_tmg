<?php
class Lamaran extends CI_Controller
{
	function __construct(){
        parent::__construct();
 
    }

	public function simpan(){
		$config['upload_path'] = './file/cv/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('cv')) {
            $error = array('error' => $this->upload->display_errors());

        } else {
            $data = array('image_metadata' => $this->upload->data());
        }
	}
}
