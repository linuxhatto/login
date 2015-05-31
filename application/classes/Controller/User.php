<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	public $template = 'template';
	public $auto_render = TRUE;

	public function action_index()
	{
	
		//$this->template->header = View::factory('header')->bind('header', $header);
		//$this->template->footer = View::factory('footer')->bind('footer', $footer);
		//$this->template->sidebar = View::factory('sidebar')->bind('sidebar', $sidebar);
			
			
		$this->template->content = View::factory('user/info')->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('user/login');
			//Request::current()->redirect('user/login');
		}
	}

	public function action_create() 
	{
	
		$this->template->header = View::factory('header')->bind('header', $header);
		$this->template->footer = View::factory('footer')->bind('footer', $footer);
		$this->template->sidebar = View::factory('sidebar')->bind('sidebar', $sidebar);
		$this->template->content = View::factory('user/create')->bind('errors', $errors)->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {
		
				// Create the user using form values
				$user = ORM::factory('User')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('Role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				$_POST = array();
				
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {
				
				// Set failure message
				$message = 'Oh..muitos erros, verifique o form abaixo';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}
	
	public function action_login(){

			$this->template->header = View::factory('header')->bind('header', $header);
			$this->template->footer = View::factory('footer')->bind('footer', $footer);	
			$this->template->sidebar = View::factory('sidebar')->bind('sidebar', $sidebar);			
	
			$this->template->content = View::factory('user/login')->bind('errors', $errors)->bind('message', $message);
			

			
	if (HTTP_Request::POST == $this->request->method()) 
		{
			
		
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$post= $this->request->post();
			$user = Auth::instance()->login($post['username'], $post['password'], $remember);
			
			// If successful, redirect user
			
				if ($user){
					//Request::current()->redirect('user/index');
					$this->redirect('user/page');
					//$message = 'logado';
					}else{
			$message = 'Login failed';
				$errors = 'Login failed';
			}
		}
	}
	
	public function action_logout(){
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		//Request::current()->redirect('user/login');
		$this->redirect('user/login');
	}
	
	
	public function action_delete(){
		$id = $this->request->param('id');
			
		$the_user = ORM::factory('user', $id);
		$the_user->delete();
		
		// Redirect to create page
		$this->redirect('user/create');
	}
	
		public function action_page(){
		
			$this->template->header = View::factory('header')->bind('header', $header);
			$this->template->footer = View::factory('footer')->bind('footer', $footer);	
				
	
			$this->template->content = View::factory('user/page')->bind('errors', $errors)->bind('message', $message);
			
			
			
					
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('user/login');
			//Request::current()->redirect('user/login');
		}
	}
	
		public function action_show(){
			

		    $users = ORM::factory('User')->find_all(); 	
			$view = View::Factory('user/show')->set('users',$users);
			$this->response->body($view);
			
			
			
		}

}