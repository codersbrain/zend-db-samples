<?php
include_once __DIR__.'/db_include.inc';
require_once __DIR__.'/../Tables/Blog.php';
require_once __DIR__.'/../Tables/BlogGatewayImpl.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/

use Tables\Blog;
use Tables\BlogGateway;

$blogGateway = new BlogGatewayImpl();
$blogGateway->delete(array("id=1"));
