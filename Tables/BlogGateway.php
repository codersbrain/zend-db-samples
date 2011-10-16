<?php
namespace Tables;
require_once __DIR__.'/Blog.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
interface BlogGateway {
	
	public function createNew();
	
	public function save(Blog $blog);
	
	public function findById($id);
	
	public function remove($id);
}