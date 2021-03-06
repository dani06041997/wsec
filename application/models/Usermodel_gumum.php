<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel_gumum extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	
	function all(){
	$data = array();
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('gumum');
	
	
	return $this->polinema_wsec->get();
	}
	
	function limit($limit,$per_page) {
	$data = array();
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('gumum');
	$this->polinema_wsec->order_by('id','desc');
	
	$this->polinema_wsec->limit($limit,$per_page);
	return $this->polinema_wsec->get();
	}
	
		
	function add($data)
	{
	$this->polinema_wsec->insert('gumum',$data);
	}
	
	function edit($id,$data)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->update('gumum',$data);
	}
	function delete($id)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->delete('gumum');
	}
	
	function usergroup() {
	$this->db->select('*');
	$this->db->from('usergroup');
	
	return $this->db->get();
	}
	
}