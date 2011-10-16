<?php
include_once __DIR__.'/../includes/zendloader.inc';
require_once __DIR__.'/../Tables/Blog.php';
require_once __DIR__.'/../Tables/BlogGateway.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/

$dbAdapter = new Zend_Db_Adapter_Pdo_Pgsql(array(
    'host'     => '127.0.0.1',
    'username' => 'taufek',
    'password' => 'password',
    'dbname'   => 'myblog'
));

use Tables\Blog;
use Tables\BlogGateway;

Zend_Db_Table::setDefaultAdapter($dbAdapter);

$blogGateway = new BlogGateway();
$blog = $blogGateway->createRow();
//var_dump($blog);
// $blog = new Blog();
$blog->setTitle('Foo Blog');
$blog->setEmail('foo@baz.com');
$blog->setCreated(date('Y-m-d H:i:s'));

echo (get_class($blog)." \n");
var_dump($blog);
echo "\n";
$blog->save();

/* $blog = new Blog();

$blog->setId(1);
$blog->setTitle('Foo Blog');
$blog->setEmail('foo@baz.com');
$blog->setCreated(mktime());

var_dump($blog); */