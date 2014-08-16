<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-24 09:11:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:11:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:12:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:12:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:12:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:12:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:12:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:14:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:14:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:15:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2014-06-24 09:15:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 09:40:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\v_index.php [ 23 ] in file:line
2014-06-24 09:40:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 10:07:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\v_index.php [ 23 ] in file:line
2014-06-24 10:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 16:14:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Base.php [ 17 ] in file:line
2014-06-24 16:14:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 16:42:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2014-06-24 16:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 16:42:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Base.php [ 18 ] in file:line
2014-06-24 16:42:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 16:43:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-06-24 16:43:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-24 16:44:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\Controller\Index.php [ 19 ] in C:\OpenServer\domains\blog\application\classes\Controller\Index.php:19
2014-06-24 16:44:36 --- DEBUG: #0 C:\OpenServer\domains\blog\application\classes\Controller\Index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 19, Array)
#1 C:\OpenServer\domains\blog\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\OpenServer\domains\blog\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\blog\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\blog\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\blog\application\classes\Controller\Index.php:19