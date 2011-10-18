<?php
namespace Tables;
require_once __DIR__.'/BlogGateway.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class BlogGatewayImpl extends \Zend_Db_Table_Abstract implements BlogGateway
{
	protected $_name = 'blogs';
	protected $_primary = 'id';
    protected $_rowClass = 'Tables\Blog';
    protected $_sequence = 'blogs_id_seq';
		
    public function createNew(){
    	
    	return $this->fetchNew();
    }
    
    public function save(Blog $blog){
    	
		return $this->insert($blog->toArray());
    }
    
    public function findById($id){
    	
    	return $this->select()->where("id=?", $id);
    }
    
    public function remove($id){
    	
    	return $this->remove($id);
    }
}