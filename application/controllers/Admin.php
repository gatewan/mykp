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