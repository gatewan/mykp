<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public function slider(){
		$this->load->view('admin/slider',array('error' => ' ' ));
	}
	public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;		

                $this->load->library('upload', $config);
				$this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/slider', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('admin/upload_success', $data);
                }

        }
	
	public function paket(){
		$this->load->view('demo/paket');
	}
	public function booking(){
		$this->load->view('demo/booking');
	}
	public function agenda(){
		$this->load->view('demo/agenda');
	}
	public function galeri(){
		$this->load->view('demo/galeri');
	}
	
}
