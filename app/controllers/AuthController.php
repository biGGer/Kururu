<?php

class AuthController extends BaseController {

	public function showLogin()
	{
		return View::make('login');
	}

}