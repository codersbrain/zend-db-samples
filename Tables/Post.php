<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class Post extends BaseModel {
	
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
	
	public function setBlogId($blog_id){
		$this->blog_id = $blog_id;
	}
	
	public function getBlogId(){
		return $this->blog_id;		
	}	
	
	public function setCreated($created){
		$this->created = $created;
	}
	
	public function getCreated(){
		return $this->created;
	}

}
