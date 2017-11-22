<?php
class Mupload extends CI_Model {
    var $tabel = 'slider'; //buat variabel tabel
 
    function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
	
	function del_gb($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
	
	//fungsi untuk menampilkan data per satuan dari tabel database
    function get_byimage($id) {
		$this->db->where('id', $id);
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() == 1) {
            return $query->row();
        }
    }
	
	 function get_update_gb($idg,$data) {
        $this->db->where('id', $idg);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }

}