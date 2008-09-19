<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Firestick {
    
    /**
     * @var integer The percentage chance that any request will be logged
     */
    var $log_frequency;
    
    /**
     * @var object The main CodeIgniter object.
     */
    var $CI;
    
    /**
     * Constructor.
     */
    function Firestick() {
        $this->CI =& get_instance();
        
        // Load firestick configuration
        $this->CI->config->load('firestick', true);
        $this->log_frequency = $this->CI->config->item('log_frequency', 'firestick');
    }
    
    /**
     * Sets the log frequency.
     *
     * @param integer $new_frequency
     */
    function set_frequency($new_frequency) {
        assert('is_long($new_frequency)');
        
        $this->log_frequency = $new_frequency;
    }
    
    /**
     * If we are logging this run, write profiling results to DB.
     */
    function resolve_profiling() {
        print '<h3>resolve_profiling()</h3>';
    }
}

?>