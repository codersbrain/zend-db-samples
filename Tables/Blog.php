<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class Blog extends \Zend_Db_Table_Row_Abstract {
	
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;		
	}	
	
	public function getTitle(){
		return $this->title;		
	}	
	
	public function setTitle($title){
		$this->title = $title;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;		
	}	
	
	public function setCreated($created){
		$this->created = $created;
	}
	
	public function getCreated(){
		return $this->created;
	}

}
