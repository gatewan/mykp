<?php
class Mpaket extends CI_Model{
 
 var $tabel = 'paket'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
	
    public function get_paket(){
	 $this->db->from($this->tabel);
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	 
    function get_paket_byid($idh) {
        $this->db->from($this->tabel);
        $this->db->where('id_paket', $idh);
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function ins_paket($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function upd_paket($kd,$data) {
        $this->db->where('id_paket', $kd);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_paket($kd) {
        $this->db->where('id_paket', $kd);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
 
}

?>