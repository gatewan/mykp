<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {
 public function __construct() {
        parent::__construct();
        $this->load->model('Mupload'); //load model Mupload yang berada di folder model
    }
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
		$data["array_emp"] = $this->Mupload->get_allimage();
		$this->load->view('demo/home',$data);
	}
	public function about()
	{
		$this->load->view('demo/about');
	}
	public function contact(){
		$this->load->view('demo/contact');
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
