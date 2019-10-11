<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Api\V1\Controllers\BaseController;

class UserController extends BaseController
{
	public function index()
	{
		$user = User::all();
		return $this->response->array($user->toArray());
	}

	public function show($id)
	{
		$user = User::findOrFail($id);
		return $this->response->array($user->toArray());
	}
}
