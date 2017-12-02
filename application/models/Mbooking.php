<?php
class Mbooking extends CI_Model{
 
 var $tabel = 'booking'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
	
    public function get_booking(){
	//return $this->db->get("artikel"); //cara 1
	 $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	
	function get_agenda(){
		$this->db->from($this->tabel);
        $this->db->where('status','approved');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
 
    function get_booking_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('id_artikel', $id);
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_update($idb,$data) {
        $this->db->where('id_booking', $idb);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_booking($idb) {
        $this->db->where('id_booking', $idb);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
 
}

?>