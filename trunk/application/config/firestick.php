<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Log Frequency Settings
|--------------------------------------------------------------------------
|
| Determines how often benchmarks are logged.  Use either FIRESTICK_LOG_ALL
| to log all requests, or FIRESTICK_LOG_RANDOM to log a random sample (one
| percent).
*/

if (!defined('FIRESTICK_LOG_ALL')) {
    define('FIRESTICK_LOG_ALL', 'all');
    define('FIRESTICK_LOG_RANDOM', 'random');
}

$config['log_frequency'] = FIRESTICK_LOG_ALL;

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