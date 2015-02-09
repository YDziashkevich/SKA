<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-27 23:41:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'forum_st.news' doesn't exist [ SELECT * FROM news ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 23:41:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#1 C:\OpenServer\domains\localhost\st\application\classes\Model\News.php(8): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(7): Model_News->get_all()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 23:43:40 --- CRITICAL: Database_Exception [ 1146 ]: Table 'forum_st.news' doesn't exist [ SELECT * FROM news ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251
2015-01-27 23:43:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM n...', false, Array)
#1 C:\OpenServer\domains\localhost\st\application\classes\Model\News.php(8): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\st\application\classes\Controller\News.php(7): Model_News->get_all()
#3 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Controller.php(84): Controller_News->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#6 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\st\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\st\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\st\modules\database\classes\Kohana\Database\Query.php:251