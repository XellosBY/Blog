<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-02 13:14:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dat ~ APPPATH\views\Account\v_plus.php [ 44 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:44
2014-07-02 13:14:31 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 44, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(37): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:44
2014-07-02 14:24:43 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-02 14:24:43 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(31): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-02 14:26:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: post ~ APPPATH\classes\Controller\Account.php [ 37 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:37
2014-07-02 14:26:42 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 37, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:37
2014-07-02 14:27:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: prod_name ~ APPPATH\classes\Controller\Account.php [ 34 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:34
2014-07-02 14:27:53 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 34, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:34
2014-07-02 14:28:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Account.php [ 38 ] in file:line
2014-07-02 14:28:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 14:29:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\Account\v_plus.php [ 11 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:11
2014-07-02 14:29:02 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:11
2014-07-02 14:34:09 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_post.php [ 13 ] in C:\OpenServer\domains\blog\application\views\v_post.php:13
2014-07-02 14:34:09 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\v_post.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(34): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\v_post.php:13
2014-07-02 14:47:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_TRY ~ APPPATH\classes\Controller\Account.php [ 28 ] in file:line
2014-07-02 14:47:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 15:05:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Controller\Account.php [ 41 ] in file:line
2014-07-02 15:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 15:06:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: categories ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php:1567
2014-07-02 15:06:04 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 1567, Array)
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categories', 'tragedy')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php:1567
2014-07-02 15:13:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (13, 'horror') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:13:47 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 'horror')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (14, 'horror') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:31 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 'horror')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:36 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (15, 'horror') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:36 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 'horror')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (16, 'horror') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:16:53 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 'horror')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:17:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (17, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:17:14 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', '1')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:21:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (18, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:21:57 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', '1')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:24:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Account.php [ 41 ] in file:line
2014-07-02 15:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 15:24:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function int() ~ APPPATH\classes\Controller\Account.php [ 41 ] in file:line
2014-07-02 15:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-02 15:25:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (20, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:25:18 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 1)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:27:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`post_id`, `categorie_id`) VALUES (21, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:27:35 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 1)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:28:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'categorie_id' in 'field list' [ INSERT INTO `posts_categories` (`cat_id`, `categorie_id`) VALUES (22, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251
2014-07-02 15:28:16 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(41): Kohana_ORM->add('categorie', 1)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\Query.php:251