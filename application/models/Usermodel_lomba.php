<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel_lomba extends CI_Model {
	private $polinema_wsec;

	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	
	function all(){
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('lomba');
	
	return $this->polinema_wsec->get();
	}
	
	function limit($limit,$per_page) {
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('lomba');
	
	$this->polinema_wsec->limit($limit,$per_page);
	return $this->polinema_wsec->get();
	}
	
	function add($data)
	{
	$this->polinema_wsec->insert('lomba',$data);
	}
	
	function edit($id,$data)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->update('lomba',$data);
	}
	function delete($id)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->delete('lomba');
	}	
}