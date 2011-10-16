<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class BlogGateway extends \Zend_Db_Table_Abstract
{
	protected $_name = 'blogs';
	protected $_primary = 'id';
    protected $_rowClass = 'Tables\Blog';
    protected $_sequence = 'blogs_id_seq';
		
}