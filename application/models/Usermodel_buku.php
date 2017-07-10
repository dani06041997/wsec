<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel_buku extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	
	function all(){
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('buku');
	
	return $this->polinema_wsec->get();
	}
	
	function limit($limit,$per_page) {
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('buku');
	
	$this->polinema_wsec->limit($limit,$per_page);
	return $this->polinema_wsec->get();
	}
	
	function add($data)
	{
	$this->polinema_wsec->insert('buku',$data);
	}
	
	function edit($id,$data)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->update('buku',$data);
	}
	function delete($id)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->delete('buku');
	}	
}