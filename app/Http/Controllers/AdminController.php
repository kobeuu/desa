<?php namespace App\Http\Controllers;

use App\Article;
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
			'articles' => Article::count(),
		];
		return view('admin.dashboard', compact('count'));
	}

	public function articles()
	{
		if(Auth::user()->admin){
			$articles = Article::latest('published_at')->paginate(5);
		} else {
			$articles = Auth::user()->articles()->latest('published_at')->paginate(5);
		}

		return view('admin.articles', compact('articles'));
	}

}
