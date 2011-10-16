<?php
namespace Tables;
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class PostGatewayImpl extends Zend_Db_Table_Abstract
{
	protected $_name = 'posts';
    protected $_primary = 'id';
	
}
