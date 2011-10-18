<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 18, 2011
*/
interface DbGateway {
	
	public function createNew();
	
	public function save(BaseModel $baseModel);
	
	public function findById($id);
	
	public function remove($id);
}