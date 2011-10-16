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
use Tables\BlogGatewayImpl;

$blogGateway = new BlogGatewayImpl();
$blog = $blogGateway->createNew();
$blog->setTitle('Foo Blog');
$blog->setEmail('foo@baz.com');
$blog->setCreated(date('Y-m-d H:i:s'));

echo (get_class($blog)." \n");
var_dump($blog);
echo "\n";
$blogGateway->save($blog);
