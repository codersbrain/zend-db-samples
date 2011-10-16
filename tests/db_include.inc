<?php
include_once __DIR__.'/../includes/zendloader.inc';
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