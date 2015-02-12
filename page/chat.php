<?php
class ChatPage extends Page {

	public function crt() {
					
		session_start();
		
		$_SESSION['chat']++;
		
		$this->forward = '/index';
		
	}

}
?>
