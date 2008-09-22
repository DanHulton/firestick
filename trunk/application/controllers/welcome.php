<?php

class Welcome extends Controller {

	function Welcome() {
		parent::Controller();	
	}
	
	function index() {
		print 'This is a test.<br/><a href="/">Only a test</a><hr/>';
	}
	
	function uritest($val = null) {
		print 'This tests a different uri.<br/>' . $val . '<hr/>';
	}
	
	function dbtest() {
		$this->load->database('default');
		
        $query = $this->db->get('events', 1);
        $query = $this->db->get('events', 1);
        $query = $this->db->get('events', 1);
        $query = $this->db->get_where('events', array('id' => 1), 1);
        $query = $this->db->get_where('events', array('name' => 'asdf'), 1);
		
		print 'DB test complete.<hr/>';
	}
}