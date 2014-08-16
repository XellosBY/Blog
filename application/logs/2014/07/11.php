<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-11 11:25:11 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\MySQL.php:171
2014-07-11 11:25:11 --- DEBUG: #0 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('user_tokens')
#3 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\blog\modules\orm\classes\Model\Auth\User\Token.php(29): Kohana_ORM->__construct(Array)
#7 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\ORM.php(46): Model_Auth_User_Token->__construct(Array)
#8 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\Auth\ORM.php(158): Kohana_ORM::factory('User_Token', Array)
#9 C:\OpenServer\domains\blog\modules\orm\classes\Kohana\Auth\ORM.php(199): Kohana_Auth_ORM->auto_login()
#10 C:\OpenServer\domains\blog\application\classes\Controller\Base.php(9): Kohana_Auth_ORM->get_user()
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#14 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#17 {main} in C:\OpenServer\domains\blog\modules\database\classes\Kohana\Database\MySQL.php:171