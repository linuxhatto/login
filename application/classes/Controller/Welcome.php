<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'main/template';
	public $auto_render = TRUE;

	public function action_index()
	{

			$this->template->header = View::factory('main/header')
            ->bind('header', $header);
		     $this->template->footer = View::factory('main/footer')
            ->bind('footer', $footer);
		 
		 $view = View::Factory('main/index');
         $this->template->corpopagina = $view;
		
	}


}