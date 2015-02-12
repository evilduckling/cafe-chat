<?php
class CafePage extends Page {

	public function crt() {
		
		session_start();
		
		$_SESSION['cafe']++;
		
		$this->forward = '/index';
		
	}

}
?>
