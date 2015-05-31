<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-30 12:17:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-05-30 12:17:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:20:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2015-05-30 12:20:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:27:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2015-05-30 12:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:36:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 16 ] in file:line
2015-05-30 12:36:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:39:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-05-30 12:39:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:39:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-05-30 12:39:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:41:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-05-30 12:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:42:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 12:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:43:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 12:43:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:46:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 12:46:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 12:47:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 12:47:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:36:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-30 14:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:39:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2015-05-30 14:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:40:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2015-05-30 14:40:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:42:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-30 14:42:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:43:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/User.php [ 31 ] in file:line
2015-05-30 14:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:49:00 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ MODPATH/orm/classes/Kohana/ORM.php [ 729 ] in file:line
2015-05-30 14:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/var/www/html/L...', 729, Array)
#1 /var/www/html/Login/modules/orm/classes/Kohana/ORM.php(729): array_key_exists(Array, Array)
#2 /var/www/html/Login/application/classes/Controller/User.php(35): Kohana_ORM->set(Array, Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller.php(84): Controller_User->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-05-30 14:57:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-30 14:57:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 14:57:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /var/www/html/Login/modules/orm/classes/Kohana/ORM.php:1567
2015-05-30 14:57:52 --- DEBUG: #0 /var/www/html/Login/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/L...', 1567, Array)
#1 /var/www/html/Login/application/classes/Controller/User.php(38): Kohana_ORM->add('roles', Object(Model_Role))
#2 /var/www/html/Login/system/classes/Kohana/Controller.php(84): Controller_User->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/Login/modules/orm/classes/Kohana/ORM.php:1567
2015-05-30 15:01:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 15:01:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:03:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 15:03:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:05:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 15:05:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:09:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/auth.php [ 12 ] in file:line
2015-05-30 15:09:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:10:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-05-30 15:10:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:11:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Model/User.php [ 164 ] in file:line
2015-05-30 15:11:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:31:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2015-05-30 15:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:32:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2015-05-30 15:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:32:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2015-05-30 15:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:36:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/User.php [ 67 ] in /var/www/html/Login/application/classes/Controller/User.php:67
2015-05-30 15:36:43 --- DEBUG: #0 /var/www/html/Login/application/classes/Controller/User.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/L...', 67, Array)
#1 /var/www/html/Login/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/Login/application/classes/Controller/User.php:67
2015-05-30 15:41:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-30 15:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:42:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The is_active property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/Login/modules/orm/classes/Kohana/ORM.php:603
2015-05-30 15:42:03 --- DEBUG: #0 /var/www/html/Login/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('is_active')
#1 /var/www/html/Login/application/classes/Controller/User.php(75): Kohana_ORM->__get('is_active')
#2 /var/www/html/Login/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/Login/modules/orm/classes/Kohana/ORM.php:603
2015-05-30 15:43:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::admin() ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2015-05-30 15:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:46:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::admin() ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2015-05-30 15:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:46:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/User.php [ 67 ] in /var/www/html/Login/application/classes/Controller/User.php:67
2015-05-30 15:46:58 --- DEBUG: #0 /var/www/html/Login/application/classes/Controller/User.php(67): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/L...', 67, Array)
#1 /var/www/html/Login/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/Login/application/classes/Controller/User.php:67
2015-05-30 15:47:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-05-30 15:47:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 15:50:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 89 ] in file:line
2015-05-30 15:50:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 19:39:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-05-30 19:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 19:39:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in file:line
2015-05-30 19:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 20:15:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:15:34 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:18:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:18:41 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:21 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:23 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:20:49 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:12 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:21:14 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:36:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:36:53 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:38:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:38:50 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:02 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:04 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:39:34 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:40:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:40:28 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:41:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:41:01 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:41:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/user/login.php [ 1 ] in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:41:19 --- DEBUG: #0 /var/www/html/Login/application/views/user/login.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/Login/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#6 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#7 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/Login/application/views/user/login.php:1
2015-05-30 20:42:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:42:00 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:45:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/Login/application/views/template.php:1
2015-05-30 20:45:17 --- DEBUG: #0 /var/www/html/Login/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/L...', 1, Array)
#1 /var/www/html/Login/system/classes/Kohana/View.php(62): include('/var/www/html/L...')
#2 /var/www/html/Login/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/L...', Array)
#3 /var/www/html/Login/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/Login/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/Login/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/html/Login/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/Login/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/Login/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/Login/application/views/template.php:1
2015-05-30 21:30:39 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Base' ~ APPPATH/views/header.php [ 19 ] in file:line
2015-05-30 21:30:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 21:32:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/header.php [ 19 ] in file:line
2015-05-30 21:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 21:33:15 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Base' ~ APPPATH/views/header.php [ 43 ] in file:line
2015-05-30 21:33:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 21:33:49 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Base' ~ APPPATH/views/header.php [ 58 ] in file:line
2015-05-30 21:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 21:34:23 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Base' ~ APPPATH/views/header.php [ 103 ] in file:line
2015-05-30 21:34:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-30 21:34:40 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Base' ~ APPPATH/views/header.php [ 212 ] in file:line
2015-05-30 21:34:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line