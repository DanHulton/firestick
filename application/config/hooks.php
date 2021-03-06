<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = array(
    'class'    => 'Firestick',
    'function' => 'pre_application',
    'filename' => 'Firestick.php',
    'filepath' => 'libraries'
);

$hook['post_controller'] = array(
    'class'    => 'Firestick',
    'function' => 'post_application',
    'filename' => 'Firestick.php',
    'filepath' => 'libraries'
);

$hook['post_system'] = array(
    'class'    => 'Firestick',
    'function' => 'resolve_profiling',
    'filename' => 'Firestick.php',
    'filepath' => 'libraries'
);

/* End of file hooks.php */
/* Location: ./system/application/config/hooks.php */