<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-01 10:29:08 --- CRITICAL: View_Exception [ 0 ]: The requested view auth/v_logged could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\blog\system\classes\Kohana\View.php:137
2014-07-01 10:29:08 --- DEBUG: #0 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth/v_logged')
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth/v_logged', Array)
#2 C:\OpenServer\domains\blog\application\classes\Controller\Index.php(27): Kohana_View::factory('auth/v_logged', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\blog\system\classes\Kohana\View.php:137
2014-07-01 12:42:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_center ~ APPPATH\classes\Controller\Account.php [ 13 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:13
2014-07-01 12:42:13 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 13, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:13
2014-07-01 12:57:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, string given, called in C:\OpenServer\domains\blog\application\views\Account\v_plus.php on line 26 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\OpenServer\domains\blog\system\classes\Kohana\Form.php:252
2014-07-01 12:57:27 --- DEBUG: #0 C:\OpenServer\domains\blog\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\OpenServer\d...', 252, Array)
#1 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(26): Kohana_Form::select('categorie', '')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\blog\application\views\v_base.php(37): Kohana_View->__toString()
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\blog\system\classes\Kohana\Form.php:252
2014-07-01 13:21:44 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:21:44 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:24:34 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:24:34 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:34:07 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:34:07 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:44:57 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 13:44:57 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:08:10 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:08:10 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:11:24 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:11:24 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:22:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Account.php [ 51 ] in file:line
2014-07-01 14:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-01 14:24:17 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:24:17 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:32:48 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:32:48 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(69): Kohana_Image->save('media/uploads/s...')
#1 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(30): Controller_Account->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:69
2014-07-01 14:44:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\views\Account\v_plus.php [ 4 ] in file:line
2014-07-01 14:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-01 15:14:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Account.php [ 49 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:49
2014-07-01 15:14:00 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 49, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:49
2014-07-01 15:20:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Account.php [ 52 ] in file:line
2014-07-01 15:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-01 15:30:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: submit ~ APPPATH\views\Account\v_plus.php [ 43 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:43
2014-07-01 15:30:22 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 43, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(40): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:43
2014-07-01 15:33:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\Account\v_plus.php [ 10 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:10
2014-07-01 15:33:11 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(40): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:10
2014-07-01 15:50:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: dat ~ APPPATH\views\Account\v_plus.php [ 10 ] in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:10
2014-07-01 15:50:46 --- DEBUG: #0 C:\OpenServer\domains\blog\application\views\Account\v_plus.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 10, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\blog\application\views\v_base.php(40): Kohana_View->__toString()
#5 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\blog\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\blog\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\blog\application\views\Account\v_plus.php:10
2014-07-01 15:57:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Account.php [ 55 ] in file:line
2014-07-01 15:57:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-01 16:00:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\Account.php [ 23 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:23
2014-07-01 16:00:17 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:23
2014-07-01 16:26:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Account.php [ 23 ] in file:line
2014-07-01 16:26:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-01 16:45:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\Account.php [ 21 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:27 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\Account.php [ 21 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:44 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\Account.php [ 21 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:45 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\Account.php [ 21 ] in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:45:46 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Account.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 21, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Account->action_plus()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Account.php:21
2014-07-01 16:53:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Account.php [ 48 ] in file:line
2014-07-01 16:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line