<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Create a new articles controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$count = [
			'users' => User::count(),
		];
		return view('admin.dashboard', compact('count'));
	}

}
