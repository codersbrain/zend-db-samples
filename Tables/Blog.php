<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class Blog extends \Zend_Db_Table_Row_Abstract {
	
	private $id;
	private $title;
	private $email;
	private $created;
	
	public function setId($id){
		$this->__set('id',$id);
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;		
	}	
	
	public function getTitle(){
		return $this->title;		
	}	
	
	public function setTitle($title){
		$this->__set('title',$title);
		$this->title = $title;
	}
	
	public function setEmail($email){
		$this->__set('email',$email);
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;		
	}	
	
	public function setCreated($created){
		$this->__set('created',$created);
		$this->created = $created;
	}
	public function getCreated(){
		return $this->created;
	}

}
