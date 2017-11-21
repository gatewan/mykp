<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin/login');
	}
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
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
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;		
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
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
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
			redirect('admin/slider',$msg);
		}
		
		//delete_files($path);
		//unlink('./uploads/thumbs/'.$rowdel['isi']->nm_gbr);
		
        
		
    }	
}
