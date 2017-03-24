<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $this->load->helper('form');
            $data['result'] = '';
            
            if($this->input->post('submit'))
            {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload',$config);
                if($this->upload->do_upload('file'))
                {
                    $data['result'] =  'Done!';
                }else{
                     $data['result'] = $this->upload->display_errors();
                }
            }
            
            $this->load->view('upload_view', $data);
	}
    
}
