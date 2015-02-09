<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-24 14:40:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\OpenServer\domains\localhost\st\system\classes\Kohana\Cookie.php:67
2015-01-24 14:40:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\OpenServer\domains\localhost\st\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\st\system\classes\Kohana\Cookie.php:67