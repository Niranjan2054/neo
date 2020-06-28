<?php 
	// debugger($_SERVER);
	$view = new view();
	$data = array(
				'remote_addr' => $_SERVER['REMOTE_ADDR'],
				'request_url'	=> $_SERVER['REQUEST_URI'],
				'http_user_agent'=> $_SERVER['HTTP_USER_AGENT'],
			);

	$act = "add";
	$views = $view->addView($data);
?>