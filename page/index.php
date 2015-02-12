<?php
class IndexPage extends Page {

	public function crt() {

		session_start();
		
		foreach(array('cafe', 'chat') as $key) {
			if(!isset($_SESSION[$key])) {
				$_SESSION[$key] = 0;
			}
			$this->data[$key] = $_SESSION[$key];
		}
		
//		$this->dbLog;
//
//		// Update
//		$oLog = new Log();
//		$oLog->user = new DbStatement('user + 1');
//		$this->dbLog
//			->field(array('user'))
//			->update($oLog);
//
//		// Select
//		$this->data['ogLog'] = $this->dbLog
//			->field(array('user', 'date'))
//			->whereByUser(1)
//			->select(1, 2);
//
//		// Insert
//		$oLog = new Log();
//		$oLog->user = mt_rand(1, 10);
//		$oLog->date = new DbStatement("NOW()");
//		$this->dbLog->insert($oLog);
//
//		// Delete
//		$this->dbLog
//			->whereByUser(NULL)
//			->delete();
//
//		// Use magic methods !
//		$ogLog = $this->dbLog
//			->field(array('user', 'date'))
//			->whereByUser(2)
//			->whereByUser(array(1,2,4))
//			->whereDifferUser(NULL)
//			->whereDifferUser(3)
//			->whereDifferUser(array(5,6,7))
//			->select();
//
//		foreach($ogLog as $oLog) {
//			$oLog->printLn();
//		}

	}

}
?>
