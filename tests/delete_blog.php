<?php
include_once __DIR__.'/db_include.inc';
require_once __DIR__.'/../Tables/Blog.php';
require_once __DIR__.'/../Tables/BlogGateway.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/

use Tables\Blog;
use Tables\BlogGateway;

$blogGateway = new BlogGateway();
$blogGateway->delete(array("id=1"));
