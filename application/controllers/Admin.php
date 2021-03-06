<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 public function __construct() {
        parent::__construct();
        $this->load->model('Mupload'); //load model Mupload yang berada di folder model
		$this->load->model('Marticle'); //load model Marticle yang berada di folder model
		$this->load->model('Mbooking'); //load model Marticle yang berada di folder model
		$this->load->model('Memail'); //load model Marticle yang berada di folder model
		$this->load->model('Mpaket'); //load model Marticle yang berada di folder model
	
	if (!$this->ion_auth->logged_in())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('auth/login');
		}
 
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
		$this->load->view('admin/petunjuk');
	}
/* PANEL SLIDER DI SINI
----------------------------*/	
	public function slider(){
		//ambil variabel URL
		$data['query'] = $this->Mupload->get_allimage(); //query dari model
		$this->load->view('admin/slider',$data); //tampilan awal ketika controller upload di akses
	}
	public function do_upload()
        {
				$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 0;
                $config['max_width']            = 2000;
                $config['max_height']           = 1100;		
				$config['file_name'] = $nmfile; //nama yang terupload nantinya
				
                $this->load->library('upload', $config);
				$this->upload->initialize($config);
/*DISABLE METHOD ORIGINAL CI UPLOAD
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
END DISABLE*/								

/* ADD NEW METHOD UPLOAD+POST */
        if($_FILES['userfile']['name'])
        {
            if ($this->upload->do_upload('userfile'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')              
                );
				
				$thumbs = array('upload_data' => $this->upload->data()); //utk generate thumbnails
				
                $this->Mupload->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil DAB!!!</div></div>");
			   // redirect('admin/upload_success'); //jika berhasil maka akan ditampilkan view vupload
			    $this->load->view('admin/upload_success', $thumbs);
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('admin/slider'); //jika gagal maka akan ditampilkan form upload
            }
        }

        }
	
    public function hapus_gb($id){ //fungsi hapus article sesuai dengan id
		//initialize kolom tabel	
		$rowdel['isi'] = $this->Mupload->get_byimage($id);
		/* file gambar dihapus dari folder */
		//delete_files('./uploads/'.$rowdel['isi']->nm_gbr);
		$path = './uploads/'.$rowdel['isi']->nm_gbr;
		$pathumb = './uploads/thumbs/'.$rowdel['isi']->nm_gbr;
		echo $path;
		echo $pathumb;
		
		if (unlink($path) and unlink($pathumb)) {
			//echo 'success kabeh';
			$this->Mupload->del_gb($id);
			$msgp = $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-warning\" id=\"alert\">DELETE Gambar Berhasil COOY!!</div></div>");
			redirect('admin/slider',$msgp);
		}
		else {
			//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $msgn = $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal DELETE Gambar COOY!!</div></div>");
			redirect('admin/slider',$msgn);
		}
		
		//delete_files($path);
		//unlink('./uploads/thumbs/'.$rowdel['isi']->nm_gbr);
	
    }	
	
	public function edit_gb($id){
		$rowed['isi'] = $this->Mupload->get_byimage($id);
		$this->load->view('admin/vedit_gb',$rowed);
		}
		
	public function update_gb(){
			$idg  = $this->input->post('idgbr');
			$ket = $this->input->post('textket');
			$data = array(				
                'ket_gbr' 		=> $ket
            );
            $this->Mupload->get_update_gb($idg,$data); //modal update data article
            $msgp = $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Keterangan gambar berhasil diupdate GAN!!!</div>"); //pesan yang tampil setelah berhasil di update
            redirect('admin/slider',$msgp);
	}

/* PANEL ARTICLE DI SINI
----------------------------*/	
	public function artikel(){
		$data['query'] = $this->Marticle->get_article(); //query dari model
		$this->load->view('admin/v_artikel',$data); //tampilan awal ketika controller upload di akses
	}
	public function form(){
        //ambil variabel URL
        $mau_ke                = $this->uri->segment(3);
        $id                    = $this->uri->segment(4);
         
        //ambil variabel dari form
		$ide					= $this->input->post('ide');
        $judul                  = $this->input->post('title');
        $kategori               = $this->input->post('category');
        $konten             	= $this->input->post('content');

		//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah Article';
           //$data['aksi'] = 'aksi_add';
            $this->load->view('admin/v_artikel',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['isi']  = $this->Marticle->get_article_byid($id);
            $data['title'] = 'Edit Artikel';
           //$data['aksi'] = 'aksi_edit';
            $this->load->view('admin/e_artikel',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'judul'  	=> $judul,
                'label'  	=> $kategori,
                'isi' 		=> $konten
            );
            $this->Marticle->get_insert($data); //model insert data article
            $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('admin/artikel',$msgp);
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(				
                'judul'  	=> $judul,
                'label'  	=> $kategori,
                'isi' 		=> $konten
            );
            $this->Marticle->get_update($ide,$data); //modal update data article
            $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('admin/artikel',$msgp);
        }
    }
	    public function hapus_artikel($id){ //fungsi hapus article sesuai dengan id
        $this->Marticle->del_article($id);
        $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Artikel berhasil dihapus</div>");
        redirect('admin/artikel',$msgp);
    }
/* END
----------------------------*/
/* PANEL List Booking
----------------------------*/			
	public function mod_booking()
	{
		$data['query'] = $this->Mbooking->get_booking(); //query dari model
		$this->load->view('admin/list_booking',$data);
	}
	public function approve()
	{
		$idb = $this->uri->segment(3);
		$data = array(				
                'status' 		=> 'approved'
        );
        $this->Mbooking->get_update($idb,$data); //modal update data booking
        $msgp = $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Order telah disetujui!!!</div>"); //pesan yang tampil setelah berhasil di update
        redirect('admin/mod_booking',$msgp);
	}
		public function cencel($idb){ //fungsi hapus article sesuai dengan id
        $this->Mbooking->del_booking($idb);
        $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Order telah digagalkan!!!</div>");
        redirect('admin/mod_booking',$msgp);
    }
//END
/*----------------------------*/
/* PANEL Invoice
----------------------------*/		
	public function invoice($idb)
	{
		$data['query'] = $this->Mbooking->get_booking_byid($idb); //query dari model
		$kdh=$data['query'][0]->paket;
		$data['hrg'] = $this->Mpaket->get_paket_byid($kdh); //query dari model
		$this->load->view('admin/invoice',$data);
	}
//END
/*----------------------------*/
/* PANEL Email
----------------------------*/
	public function inbox(){
		$data['query'] = $this->Memail->get_message(); //query dari model
		$this->load->view('admin/mail',$data); //tampilan awal ketika controller upload di akses
	}
		
	public function sendmail(){
	//ambil variabel dari form
	$nama			= $this->input->post('nama');
    $email          = $this->input->post('email');
    $judul          = $this->input->post('subject');
    $pesan          = $this->input->post('message');
	$data = array(
                'nama'  	=> $nama,
                'email'  	=> $email,
                'judul' 	=> $judul,
				'pesan' 	=> $pesan
            );
	//sekalian insert ke database
	$this->Memail->get_insert($data); 
	//template email dari sistem
	$app = 'WTGI WEB';
	$pengiriman['psn'] = '<br/>
			    #PENGIRIM: '.$nama.',<br/>
			    #EMAIL: '.$email.',<br/>
			    +----------------------------------------------------------- <br/>
			    '.$pesan.'<br/>

';
	$config = Array(
	'protocol' => 'smtp',
	'smtp_host' => 'ssl://smtp.googlemail.com',
	'smtp_port' => 465,
	'smtp_user' => 'YOUR_MAIL@gmail.com', // change it to yours (DEFAULT Email For SYSTEM)
	'smtp_pass' => 'YOUR_PASSWORD', // change it to yours
	'mailtype' => 'html',
	'charset' => 'iso-8859-1',
	'crlf' => '\r\n',
	'newline' => '\r\n',
	'wordwrap' => TRUE
	);
	  $this->load->library('email',$config);
      $this->email->from($email,$app); // change it to yours
      $this->email->to('YOUR_DESTINATION@gmail.com');// change it to yours (DESTINASI Email Administrator)
      $this->email->subject($judul);
      $this->email->message($this->load->view('mail_template', $pengiriman, TRUE));
      if($this->email->send())
		{
			$msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Pesan telah dikirim! </div>"); //pesan yang tampil setelah berhasil di update
			redirect('demo/contact',$msgp);
		}
     else
		{
			//show_error($this->email->print_debugger());
			$msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Pesan gagal dikirim, silakan coba lagi! </div>"); //pesan yang tampil setelah berhasil di update
			redirect('demo/contact',$msgp);
		}

	}
	
	public function del_pesan($id){ //fungsi hapus article sesuai dengan id
		$id = $this->uri->segment(3);
        $this->Memail->del_message($id);
        $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Pesan berhasil dihapus</div>");
        redirect('admin/inbox',$msgp);
    }
	
	public function hrg_paket(){
		$data['list'] = $this->Mpaket->get_paket();
		$this->load->view('admin/harga',$data);
	}
	public function tbh_hrg(){
	//ambil variabel dari form
	$nm_pkt		= $this->input->post('nm_paket');
    $hrg        = $this->input->post('hrg_paket');
	$kd			= $this->input->post('id_paket');
	$data = array(
                'id_paket'  	=> $kd,
                'nm_paket'  	=> $nm_pkt,
                'harga' 		=> $hrg 
            );
	//sekalian insert ke database
	$this->Mpaket->ins_paket($data); 
	$msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Harga berhasil ditambahkan! </div>"); //pesan yang tampil setelah berhasil di update
	redirect('admin/hrg_paket',$msgp);
	}
	public function edit_hrg($idh){
		$data['old'] = $this->Mpaket->get_paket_byid($idh);
		$this->load->view('admin/e_harga',$data);
	}
	public function update_hrg(){
	//ambil variabel dari form
	$nm_pkt		= $this->input->post('nm_paket');
    $hrg        = $this->input->post('hrg_paket');
	$kd			= $this->input->post('id_paket');
	$data = array(
                'nm_paket'  	=> $nm_pkt,
                'harga' 		=> $hrg 
            );
            $this->Mpaket->upd_paket($kd,$data); //modal update data article
            $msgp = $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Harga berhasil diupdate! </div>"); //pesan yang tampil setelah berhasil di update
            redirect('admin/hrg_paket',$msgp);
	}
	public function del_hrg($kd){ //fungsi hapus article sesuai dengan id
		$id = $this->uri->segment(3);
        $this->Mpaket->del_paket($kd);
        $msgp=$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Harga telah dihapus!</div>");
        redirect('admin/hrg_paket',$msgp);
    }
	
}
