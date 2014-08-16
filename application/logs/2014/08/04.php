<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-04 14:25:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Categorie::navi_cat() ~ APPPATH\classes\Controller\Widgets\Menu.php [ 13 ] in file:line
2014-08-04 14:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-04 14:39:46 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\Widgets\v_menu.php [ 6 ] in file:line
2014-08-04 14:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-04 14:42:57 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\views\Widgets\v_menu.php [ 6 ] in C:\OpenServer\domains\blog\application\views\Widgets\v_menu.php:6
2014-08-04 14:42:57 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Widgets\v_menu.php(6): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\blog\application\classes\Controller\Base.php(21): Kohana_Request->execute()
#10 C:\OpenServer\domains\blog\application\classes\Controller\Index.php(7): Controller_Base->before()
#11 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(7): Controller_Index->before()
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#15 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#18 {main} in C:\OpenServer\domains\blog\application\views\Widgets\v_menu.php:6
2014-08-04 14:48:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Widgets_Menu::$current ~ APPPATH\classes\Controller\Widgets\Menu.php [ 13 ] in C:\OpenServer\domains\blog\application\classes\Controller\Widgets\Menu.php:13
2014-08-04 14:48:53 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Widgets\Menu.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Widgets_Menu->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\application\classes\Controller\Base.php(21): Kohana_Request->execute()
#7 C:\OpenServer\domains\blog\application\classes\Controller\Index.php(7): Controller_Base->before()
#8 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(7): Controller_Index->before()
#9 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(69): Controller_Account->before()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Widgets\Menu.php:13