<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-31 13:02:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Account.php [ 132 ] in file:line
2014-07-31 13:02:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:03:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Account.php [ 133 ] in file:line
2014-07-31 13:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:03:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Account.php [ 133 ] in file:line
2014-07-31 13:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:03:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Account.php [ 133 ] in file:line
2014-07-31 13:03:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:04:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\Account.php [ 133 ] in file:line
2014-07-31 13:04:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:06:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\classes\Controller\Account.php [ 103 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:06:55 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 103, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:07:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\classes\Controller\Account.php [ 103 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:07:52 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 103, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:08:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Account.php [ 103 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:08:11 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(103): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\OpenServer\d...', 103, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: categorie ~ APPPATH\classes\Controller\Account.php [ 103 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:08:52 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(103): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 103, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:103
2014-07-31 13:29:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Controller\Account.php [ 108 ] in file:line
2014-07-31 13:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:30:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Post::inner_join() ~ APPPATH\classes\Controller\Account.php [ 103 ] in file:line
2014-07-31 13:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:31:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Post::through() ~ APPPATH\classes\Controller\Account.php [ 104 ] in file:line
2014-07-31 13:31:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:47:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Account.php [ 114 ] in file:line
2014-07-31 13:47:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:48:18 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'SELECT' ~ APPPATH\classes\Controller\Account.php [ 108 ] in file:line
2014-07-31 13:48:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:48:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.categorie
									FROM posts AS p INNER JOIN categories as c
									WHERE ' at line 1 [ SELECT p.id, p.post_id, p.post_title, p.photo, p.post, p.date c.categorie
									FROM posts AS p INNER JOIN categories as c
									WHERE p.id = '21' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 13:48:54 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(111): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 13:49:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'p.post_id' in 'field list' [ SELECT p.id, p.post_id, p.post_title, p.photo, p.post, p.date, c.categorie
									FROM posts AS p INNER JOIN categories as c
									WHERE p.id = '21' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 13:49:53 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(111): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 13:50:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 13:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:51:34 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 13:51:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 13:51:38 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 13:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:00:28 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 14:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:02:21 --- CRITICAL: ErrorException [ 2 ]: mysqli_fetch_array() expects parameter 1 to be mysqli_result, object given ~ APPPATH\classes\Controller\Account.php [ 112 ] in file:line
2014-07-31 14:02:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_fetch_ar...', 'C:\OpenServer\d...', 112, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(112): mysqli_fetch_array(Object(Database_Query))
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-31 14:08:48 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 14:08:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:11:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::set_charset() ~ APPPATH\classes\Controller\Account.php [ 108 ] in file:line
2014-07-31 14:11:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:17:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method DB::datatype() ~ APPPATH\classes\Controller\Account.php [ 113 ] in file:line
2014-07-31 14:17:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:20:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Account.php [ 102 ] in file:line
2014-07-31 14:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:21:02 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') WHERE `id` = '21' LIMIT 1' at line 1 [ SELECT `post`.`id` AS `id`, `post`.`user_id` AS `user_id`, `post`.`post_title` AS `post_title`, `post`.`photo` AS `photo`, `post`.`post` AS `post`, `post`.`date` AS `date` FROM `posts` AS `post` JOIN `categorie` ON () WHERE `id` = '21' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:21:02 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(104): Kohana_ORM->find()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:23:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'blog.categorie' doesn't exist [ SELECT `post`.`id` AS `id`, `post`.`user_id` AS `user_id`, `post`.`post_title` AS `post_title`, `post`.`photo` AS `photo`, `post`.`post` AS `post`, `post`.`date` AS `date` FROM `posts` AS `post` JOIN `categorie` ON (`post_id` = `cat_id`) WHERE `id` = '21' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:23:50 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(105): Kohana_ORM->find()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:24:23 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `post`.`id` AS `id`, `post`.`user_id` AS `user_id`, `post`.`post_title` AS `post_title`, `post`.`photo` AS `photo`, `post`.`post` AS `post`, `post`.`date` AS `date` FROM `posts` AS `post` JOIN `categories` ON (`post_id` = `cat_id`) WHERE `id` = '21' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:24:23 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(105): Kohana_ORM->find()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:25:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'post_id' in 'on clause' [ SELECT `post`.`id` AS `id`, `post`.`user_id` AS `user_id`, `post`.`post_title` AS `post_title`, `post`.`photo` AS `photo`, `post`.`post` AS `post`, `post`.`date` AS `date` FROM `posts` AS `post` JOIN `categories` ON (`post_id` = `cat_id`) WHERE `post`.`id` = '21' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:25:59 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(105): Kohana_ORM->find()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:27:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Post::through() ~ APPPATH\classes\Controller\Account.php [ 103 ] in file:line
2014-07-31 14:27:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:48:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: categorie ~ APPPATH\views\Account\v_plus_edit.php [ 35 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php:35
2014-07-31 14:48:55 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 35, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(44): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php:35
2014-07-31 14:50:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\Account\v_plus_edit.php [ 35 ] in file:line
2014-07-31 14:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 14:57:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: post_title ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php:11
2014-07-31 14:57:02 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(44): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus_edit.php:11
2014-07-31 14:58:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') WHERE `post`.`id` = '21' LIMIT 1' at line 1 [ SELECT `post`.`id` AS `id`, `post`.`user_id` AS `user_id`, `post`.`post_title` AS `post_title`, `post`.`photo` AS `photo`, `post`.`post` AS `post`, `post`.`date` AS `date` FROM `posts` AS `post` JOIN `categories` ON () WHERE `post`.`id` = '21' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 14:58:34 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(104): Kohana_ORM->find()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-31 15:12:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Account.php [ 109 ] in file:line
2014-07-31 15:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 15:13:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::as_array() ~ APPPATH\classes\Controller\Account.php [ 108 ] in file:line
2014-07-31 15:13:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 15:17:15 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Database_Query as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 15:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 15:18:33 --- CRITICAL: ErrorException [ 2 ]: mysqli_fetch_array() expects parameter 1 to be mysqli_result, object given ~ APPPATH\classes\Controller\Account.php [ 109 ] in file:line
2014-07-31 15:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_fetch_ar...', 'C:\OpenServer\d...', 109, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(109): mysqli_fetch_array(Object(Database_Query))
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-31 15:21:13 --- CRITICAL: ErrorException [ 2 ]: mysqli_fetch_array() expects parameter 1 to be mysqli_result, object given ~ APPPATH\classes\Controller\Account.php [ 110 ] in file:line
2014-07-31 15:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysqli_fetch_ar...', 'C:\OpenServer\d...', 110, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(110): mysqli_fetch_array(Object(Database_Query))
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-07-31 15:40:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Categorie as array ~ APPPATH\views\Account\v_plus_edit.php [ 11 ] in file:line
2014-07-31 15:40:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line