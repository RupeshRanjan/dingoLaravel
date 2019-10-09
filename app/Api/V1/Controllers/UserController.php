<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function index()
	{
		return "rupesh";
	}

	public function show($id)
	{
		$user = User::findOrFail($id);
		return $this->response->array($user->toArray());
	}
}
