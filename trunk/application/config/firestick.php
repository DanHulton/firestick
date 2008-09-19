<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Log Frequency Settings
|--------------------------------------------------------------------------
|
| Determines how often benchmarks are logged.  100 = 100% = all the time.
*/

$config['log_frequency'] = 100;

/*
|--------------------------------------------------------------------------
| Log Database Settings
|--------------------------------------------------------------------------
|
| Defines the database in which all logs are stored.  You can store your
| logs in the same database as your application if you like (by changing
| db_name below and ensuring you alter the create.sql to create the template
| in your application's database), but splitting it into two databases is
| cleaner.
*/

$config['db_name'] = 'logs';

?>