<?php
class Memail extends CI_Model{
 
 var $tabel = 'inbox'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
	
    public function get_message(){
	//return $this->db->get("artikel"); //cara 1
	 $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
		  
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function del_message($id) {
        $this->db->where('id_pesan', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
 
}

?>