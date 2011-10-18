<?php
include_once __DIR__.'/db_include.inc';
require_once __DIR__.'/../Tables/Blog.php';
require_once __DIR__.'/../Tables/BlogGatewayImpl.php';
require_once __DIR__.'/../Tables/Post.php';
require_once __DIR__.'/../Tables/PostGatewayImpl.php';
/**
* 
* @author dhydrated
* @since Oct 16, 2011
*/

use Tables\Blog;
use Tables\BlogGatewayImpl;
use Tables\Post;
use Tables\PostGatewayImpl;

$blogGateway = new BlogGatewayImpl();
$blog = $blogGateway->findById(11);
echo ("Hello: " . get_class($blog)." \n");

$postGateway = new PostGatewayImpl();
$post = $postGateway->createNew();
$post->setTitle('Foo Blog');
$post->setCreated(date('Y-m-d H:i:s'));
$post->setBlogId($blog->getId());
$postGateway->save($post);
echo (get_class($post)." \n");
