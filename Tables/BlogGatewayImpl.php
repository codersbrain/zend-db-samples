<?php
namespace Tables;
require_once __DIR__.'/BlogGateway.php';
require_once __DIR__.'/BaseDbGateway.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/
class BlogGatewayImpl extends BaseDbGateway implements BlogGateway
{
	protected $_name = 'blogs';
	protected $_primary = 'id';
    protected $_rowClass = 'Tables\Blog';
    protected $_sequence = 'blogs_id_seq';
		
}