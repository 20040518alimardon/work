<?php

error_reporting(E_ALL ^ E_NOTICE);  
  
require "vendor/autoload.php";

$db = new MysqliDb ('localhost', 'root', '', 'users');

?>