<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-08 20:15:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\OpenServer\domains\localhost\st\application\views\template.php:25
2015-02-08 20:15:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 25, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\View.php(62): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\st\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#7 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\st\application\views\template.php:25
2015-02-08 22:04:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::get_message() ~ APPPATH\classes\Controller\News.php [ 68 ] in file:line
2015-02-08 22:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line