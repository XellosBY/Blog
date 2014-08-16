<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-28 16:02:14 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_post.php [ 13 ] in C:\OpenServer\domains\blog\application\views\v_post.php:13
2014-07-28 16:02:14 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\v_post.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(33): Kohana_View->__toString()
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