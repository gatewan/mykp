<?php
class Marticle extends CI_Model{
 
 var $tabel = 'artikel'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }
	
    public function get_article(){
	//return $this->db->get("artikel"); //cara 1
	 $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	
	function get_about(){
		$this->db->from($this->tabel);
        $this->db->where('label','about');
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
	}
	
	function get_paket(){
		$this->db->from($this->tabel);
        $this->db->where('label','paket');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
	
	function get_label($number,$offset){
		//$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where('label',$offset);
		$this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get('',$number,$offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }

	}
	
	function get_blog($number,$offset){
		$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where_not_in('label',$ignore);
		$this->db->order_by('id_artikel', 'DESC');
        $query = $this->db->get('',$number,$offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }

	}
	
	function get_labelside($number,$offset){
		$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where_not_in('label',$ignore);
		$this->db->order_by('label', 'ASC');
		$this->db->select('label');
		$this->db->distinct();
        $query = $this->db->get('',$number,$offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }

	}
	
	function jumlah_data(){
		$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where_not_in('label',$ignore);
        $query = $this->db->get()->num_rows();
		return $query;
	}
	
	function jumlah_label($from){
		//$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where('label',$from);
        $query = $this->db->get()->num_rows();
		return $query;
	}
 
    function get_article_byid($id) {
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
 
    function get_update($ide,$data) {
        $this->db->where('id_artikel', $ide);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
	
    function del_article($id) {
        $this->db->where('id_artikel', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
 
	function blog_search($number,$offset,$keyword){
		$ignore = array('paket', 'about');
		$this->db->from($this->tabel);
        $this->db->where_not_in('label',$ignore);
		$this->db->order_by('id_artikel', 'DESC');
		$this->db->like('judul', $keyword);
        $query = $this->db->get('',$number,$offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}
}

?>