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
        // Total elapsed script time
        $elapsed = $this->CI->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end');
        print '<h3>Elapsed: ' . $elapsed . '</h3>';
        
        // Total consumed memory
        $memory	 = ( ! function_exists('memory_get_usage')) ? 0 : memory_get_usage();
        print '<h3>Memory: ' . $memory . '</h3>';
        
        // DB calls
        if ( ! class_exists('CI_DB_driver')) {
            print 'NO DB LOADED';
        }
        else {
			if (count($this->CI->db->queries) == 0) {
                print 'NO DB CALLS';
            }
            else {
                foreach ($this->CI->db->queries as $key => $val) {
					$val = htmlspecialchars($val, ENT_QUOTES);
					$time = number_format($this->CI->db->query_times[$key], 4);
                    
                    print 'DB Call: ' . $key . ' => ' . $val . ', Time: ' . $time . '<br />';
                }
            }
        }
    }
}

?>