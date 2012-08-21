<?php
class SessionHandler
{
	static function startSession(){
		$_SESSION['session']=true;
	}

	static function endSession(){
		if(isset($_SESSION))
		{
			unset($_SESSION);
			session_destroy();
		}
	}



	function onLoad()
	{
		session_start();
		if($_REQUEST['session']=='end')
			self::endSession();
		if($_REQUEST['session']=='start')
			self::startSession();
	}
}
?>