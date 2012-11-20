ci_opauth
=========
OPauth + CodeIgniter integration.
Based on https://github.com/uzyn/opauth


IMPORTANT FILES.
=================

*/application/config/ci_opauth.php
----------------------------------
This file contains most common options to set up opauth:

'path' - Route to login method. Out-of-the-zip it will be /your_app/auth/login

'callback_url' - Route to callback method. Out-of-the-zip it will be /your_app/auth/authenticate

'callback_transport' - CodeIgniter not support $_SESSION, so you can choose between 'get' or 'post'.

'security_salt' - Type anything.

'debug' - True or false.

'Strategy' - It contains a number of strategies. Choose your authentication providers and complete data

*.htaccess
----------
You need to enable mod_rewrite on your webserver. Change your_app by your app name.

*/application/libraries/Opauth/OpenID/OpenIDStrategy.php
--------------------------------------------------------
Changed file to get openid_url from ci_opauth.php config file. If you want to use any openid_url, just review comments on the file.

COMMENTS.
=========
This integration only identifies users. If you want to store the data, you must edit the method 'auth/authenticate' 
and develop the necessary logic to do it.


