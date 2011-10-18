<?php
namespace Tables;
require_once __DIR__.'/PostGateway.php';
require_once __DIR__.'/BaseDbGateway.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class PostGatewayImpl extends BaseDbGateway implements PostGateway {
	
	protected $_name = 'posts';
    protected $_primary = 'id';
    protected $_rowClass = 'Tables\Post';
    protected $_sequence = 'posts_id_seq';
	
}
