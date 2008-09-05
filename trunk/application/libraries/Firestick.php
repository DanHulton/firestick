<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Firestick {
    
    var $log_frequency;
    
    function Firestick() {
        // Load firestick configuration
        $CI =& get_instance();
        
        $CI->config->load('firestick', true);
        
        $this->log_frequency = $CI->config->item('log_frequency', 'firestick');
        
        print '<h1>Frequency: ' . $this->log_frequency . '</h1>';
    }
    
    function some_function() {
        
    }
}

?>