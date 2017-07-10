<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel_devisi extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	
	function all(){
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('devisi');
	
	
	return $this->polinema_wsec->get();
	}
	
	function limit($limit,$per_page) {
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('devisi');
	$this->polinema_wsec->order_by('id','desc');
	
	$this->polinema_wsec->limit($limit,$per_page);
	return $this->polinema_wsec->get();
	}
	
		
	function add($data)
	{
	$this->polinema_wsec->insert('devisi',$data);
	}
	
	function edit($id,$data)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->update('devisi',$data);
	}
	function delete($id)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->delete('devisi');
	}
	
	function usergroup() {
	$this->db->select('*');
	$this->db->from('usergroup');
	
	return $this->db->get();
	}
	
}