<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-13 07:42:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Index.php [ 29 ] in file:line
2014-08-13 07:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-13 08:52:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _data ~ APPPATH\classes\Controller\Account.php [ 58 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:58
2014-08-13 08:52:53 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 58, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:58
2014-08-13 08:53:58 --- CRITICAL: Database_Exception [ 1048 ]: Column 'post_id' cannot be null [ INSERT INTO `posts_categories` (`post_id`, `cat_id`) VALUES (NULL, 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 08:53:58 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(63): Kohana_ORM->add('categorie', 2)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 08:54:23 --- CRITICAL: Database_Exception [ 1048 ]: Column 'post_id' cannot be null [ INSERT INTO `posts_categories` (`post_id`, `cat_id`) VALUES (NULL, 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-08-13 08:54:23 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(63): Kohana_ORM->add('categorie', 2)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251