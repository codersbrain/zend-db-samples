<?php
namespace Tables;
require_once __DIR__.'/DbGateway.php';
require_once __DIR__.'/BaseModel.php';
/**
* 
* @author dhydrated
* @since Oct 18, 2011
*/
class BaseDbGateway extends \Zend_Db_Table_Abstract implements DbGateway {
	
	public function createNew(){
		 
		return $this->fetchNew();
	}
	
	public function save(BaseModel $baseModel){
		 
		return $this->insert($baseModel->toArray());
	}
	
	public function findById($id){
		 
		return $this->fetchRow($this->select()->where("id=?", $id));
	}
	
	public function remove($id){
		 
		return $this->remove($id);
	}
}