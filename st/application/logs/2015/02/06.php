<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-06 14:22:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Main::edit_message() ~ APPPATH\classes\Controller\Main.php [ 25 ] in file:line
2015-02-06 14:22:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-06 17:59:32 --- CRITICAL: Database_Exception [ 1300 ]: Invalid utf8 character string: 'Deshkevich) gid=544(\xC0\xE4\xEC\xE8\xED\xE8\xF1\xF2\xF0\xE0\xF2' [ SELECT * FROM `st_main` ORDER BY `st_uid=500(Y`.`Deshkevich) gid=544(��������������) groups=544(��������������)
` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-02-06 17:59:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\OpenServer\domains\localhost\st\application\classes\Model\Main.php(9): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\st\application\classes\Controller\Main.php(7): Model_Main->get_all_messages()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-02-06 18:03:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description_add ~ APPPATH\classes\Controller\News.php [ 17 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:03:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description_add ~ APPPATH\classes\Controller\News.php [ 17 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description_add ~ APPPATH\classes\Controller\News.php [ 17 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description_add ~ APPPATH\classes\Controller\News.php [ 17 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:04:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:17
2015-02-06 18:06:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title_add ~ APPPATH\classes\Controller\News.php [ 15 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:06:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:07:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title_add ~ APPPATH\classes\Controller\News.php [ 15 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:07:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:07:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title_add ~ APPPATH\classes\Controller\News.php [ 15 ] in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:07:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 15, Array)
#1 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php:15
2015-02-06 18:08:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\classes\Model\News.php [ 13 ] in C:\OpenServer\domains\localhost\st\application\classes\Model\News.php:13
2015-02-06 18:08:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\classes\Model\News.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(27): Model_News->add_news(Array)
#2 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\st\application\classes\Model\News.php:13
2015-02-06 18:09:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'description' in 'field list' [ INSERT INTO `st_main` (`title`, `description`, `content`, `author`) VALUES ('ввввввввввввв', 'вввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввв', 'ввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввввв', 'admin') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-02-06 18:09:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `st...', false, Array)
#1 C:\OpenServer\domains\localhost\st\application\classes\Model\News.php(16): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(27): Model_News->add_news(Array)
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-02-06 18:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 25 ] in C:\OpenServer\domains\localhost\st\application\views\template.php:25
2015-02-06 18:22:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\application\views\template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 25, Array)
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
2015-02-06 18:23:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::del_message() ~ APPPATH\classes\Controller\News.php [ 40 ] in file:line
2015-02-06 18:23:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line