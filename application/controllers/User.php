<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template','user/user_data');
	}
}
