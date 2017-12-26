<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {
 public function __construct() {
        parent::__construct();
        $this->load->model('Mupload'); //load model Mupload yang berada di folder model
		$this->load->model('Marticle'); //load model Marticle yang berada di folder model
		$this->load->model('Mbooking'); //load model Mbooking yang berada di folder model
		$this->load->model('Mpaket'); //load model Mbooking yang berada di folder model
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
		$data["array_emp"] = $this->Marticle->get_about();
		$this->load->view('demo/about',$data);
	}
	public function paket()
	{
		$data["array_emp"] = $this->Marticle->get_paket();
		$this->load->view('demo/paket',$data);
	}

/* PANEL ARTICLE DI SINI
----------------------------*/	
	public function booking(){
		$data['list'] = $this->Mpaket->get_paket();
		$this->load->view('demo/booking',$data);
	}
	public function form(){
        //ambil variabel URL
        $mau_ke                = $this->uri->segment(3);
         
        //ambil variabel dari form
        $nama                   = $this->input->post('namanya');
        $kontak              	= $this->input->post('no_hpnya');
		$tglbooking             = $this->input->post('tglnya');
        $email	             	= $this->input->post('emailnya');
		$paket	             	= $this->input->post('paketnya');

		//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah Pesanan';
           //$data['aksi'] = 'aksi_add';
            $this->load->view('admin/v_artikel',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'nm_user'  		=> $nama,
                'cp_user'  		=> $kontak,
				'tgl_booking'	=> $tglbooking,
                'email' 		=> $email,
				'paket'			=> $paket
            );
            $this->Mbooking->get_insert($data); //model insert data article
            $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Booking berhasil, silakan tunggu pesan konfirmasi via Email/Whatsapp/Telp/SMS </div>"); //pesan yang tampil setalah berhasil di insert
//############SEND NOTIFICATION
				//template email dari sistem
				$app = 'WTGI BOOKING NOTIFICATION';
				$pengiriman['psn'] = '
<br/>
Hai Admin WTGI, ada yang booking loh,<br/>
[CLIENT: '.$nama.'],<br/>
[EMAIL: '.$email.'],<br/>
<br/>
silakan cek PANEL MODERASI pada website!<br/>
<br/>
Salam,<br/> 
ROBOT WEB WTGI.
';
      $this->load->library('email',$config);
      $this->email->from($email,$app); // change it to yours
      $this->email->to('YOUR_DESTINATION@gmail.com');// change it to yours (DESTINASI Email Administrator)
      $this->email->subject($app);
      $this->email->message($this->load->view('mail_template', $pengiriman, TRUE));
      $this->email->send();
//############SEND NOTIFICATION END
            redirect('demo/booking',$msgp);
        } 
    }	
/* END
----------------------------*/		
	public function agenda(){
		$data['query'] = $this->Mbooking->get_agenda(); //query dari model
		$this->load->view('demo/agenda',$data); //tampilan awal ketika controller upload di akses
	}
	public function galeri(){
		$this->load->view('demo/galeri');
	}
	public function contact(){
		$this->load->view('demo/contact');
	}
	public function detail($id){ //fungsi detail article
        //$data['title'] = 'Detail Artikel'; //judul title
        $data['isi'] = $this->Marticle->get_article_byid($id); //query model article sesuai id
        $this->load->view('demo/s_artikel',$data); //meload views detail article
	}
	public function label(){
		$from = $this->uri->segment(3);
		$jumlah_data = $this->Marticle->jumlah_label($from);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Demo/blog/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		//customize pagination
		$config['next_link'] = 'Older &rarr;';
		$config['next_tag_open'] = '<li class="next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Newer';
		$config['prev_tag_open'] = '<li class="previous">';
		$config['prev_tag_close'] = '</li>';
		$config['display_pages'] = FALSE;
		//end customize pagination
		$this->pagination->initialize($config);	
		$data["array_emp"] = $this->Marticle->get_label($config['per_page'],$from);
		$data["sidebar"] = $this->Marticle->get_labelside('',$from);
		$this->load->view('demo/blog',$data);
	}
	public function blog(){
		//$data["array_emp"] = $this->Marticle->get_blog();
		$jumlah_data = $this->Marticle->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Demo/blog/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		//customize pagination
		$config['next_link'] = 'Older &rarr;';
		$config['next_tag_open'] = '<li class="next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Newer';
		$config['prev_tag_open'] = '<li class="previous">';
		$config['prev_tag_close'] = '</li>';
		$config['display_pages'] = FALSE;
		//end customize pagination
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
		$data["array_emp"] = $this->Marticle->get_blog($config['per_page'],$from);
		$data["sidebar"] = $this->Marticle->get_labelside('',$from);
		$this->load->view('demo/blog',$data);
	}
	public function search(){
		//$data["array_emp"] = $this->Marticle->get_blog();
		$key = $this->input->get('cari');
		$jumlah_data = $this->Marticle->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Demo/blog/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		//customize pagination
		$config['next_link'] = 'Older &rarr;';
		$config['next_tag_open'] = '<li class="next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Newer';
		$config['prev_tag_open'] = '<li class="previous">';
		$config['prev_tag_close'] = '</li>';
		$config['display_pages'] = FALSE;
		//end customize pagination
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
		$data["array_emp"] = $this->Marticle->blog_search($config['per_page'],$from,$key);
		$data["sidebar"] = $this->Marticle->get_labelside('',$from);
		$this->load->view('demo/blog',$data);
	}
	
}
