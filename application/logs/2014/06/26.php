<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-26 09:52:19 --- CRITICAL: View_Exception [ 0 ]: The requested view auth/v_logged could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\blog\system\classes\Kohana\View.php:137
2014-06-26 09:52:19 --- DEBUG: #0 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth/v_logged')
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth/v_logged', Array)
#2 C:\OpenServer\domains\blog\application\classes\Controller\Index.php(27): Kohana_View::factory('auth/v_logged', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\system\classes\Kohana\View.php:137