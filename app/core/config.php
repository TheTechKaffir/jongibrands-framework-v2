<?php 

/**
 * App Info
 */

define('APP_NAME','Jongibrands PHP MVC Framework');
define('APP_DESCRIPTION','A simple but robust PHP MVC framework with Database configuration, Login & registration, with basic validation, basic routing, for quick Web Application Development');
define('APP_DISCLAIMER','You may need to perform further security tasks on the Framework as it is NOT issued on an absolute basis');
define('APP_AUTHOR','Jongi - The Tech Kaffir, Jongibrands (Pty) Ltd');

/**
 * Database Configuration 
 */

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','play_db');
    define('DBDRIVER','mysql');

    // App Root - localhost
    define('ROOT','http://localhost/jongibrands-framework-v2/public');
} else 
{
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','play_db');
    define('DBDRIVER','mysql');

    // App Root -  Live Server (e.g. https://www.website.co.za)
    define('ROOT','https://');
}

