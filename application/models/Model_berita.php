<?php
class Model_berita extends ci_model
{
	public function __construct()
	{
		parent::__construct();
		$this->polinema_wsec = $this->load->database('polinema_wsec', true);
	}
	function tampil()
	{
	$this->polinema_wsec->order_by('id','desc');
	$query=$this->polinema_wsec->get('berita');
	if($query ->num_rows()>0)
	{
	return $query->result();
	}
	else
	{
	return array();
	}
	}
	
	function per_id($id)
	{
	$this->polinema_wsec->where('id',$id);
	$query=$this->polinema_wsec->get('berita');
	return $query->result();
	}
	
	function all(){
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('berita');
	
	return $this->polinema_wsec->get();
	}
	
	function limit($limit,$per_page) {
	$this->polinema_wsec->order_by('id','desc');
	$this->polinema_wsec->select('*');
	$this->polinema_wsec->from('berita');
	
	$this->polinema_wsec->limit($limit,$per_page);
	return $this->polinema_wsec->get();
	}
	
	function add($data)
	{
	$this->polinema_wsec->insert('berita',$data);
	}
	
	function edit($id,$data)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->update('berita',$data);
	}
	function delete($id)
	{
	$this->polinema_wsec->where('id',$id);
	$this->polinema_wsec->delete('berita');
	}	
}