<?php

class UserController
{
	public function index()
	{
		return User::all();
	}
}