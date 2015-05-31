<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public function action_index()
	{
		//Request::current()->redirect('user/login');
		$this->redirect('user/login');
		
	////	$this->template->header = View::factory('header')->bind('header', $header);
	///	$this->template->footer = View::factory('footer')->bind('footer', $footer);
	//	$this->template->sidebar = View::factory('sidebar')->bind('sidebar', $sidebar);
			
		
	}

}