<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Article;
use App\User;

class Core extends Controller
{
	public function __construct(){
		// $this->middleware('mymiddle');
	}

    public function getArticles(Request $request){
		// $articles = DB::table('articles')->get();
		//
		// foreach($articles as $article){
		// 	echo $article->name.'<br>';
		// }

		// $articles = Article::where('id', '<', 3)->get();

		// Article::chunk(2, function($articles){
		//
		// });

		// $article = Article::find(1);

		// Create
		// $article = new Article;
		// $article->name = 'New Article';
		// $article->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		// $article->img = 'pic5.jpg';
		// $article->alias = 'post2';
		// $article->save();

		//Update
		// $article = Article::find(2);
		// $article->alias = 'ebala';
		// $article->save();
		//

		// Article::firstOrCreate([
		// 	'name'=> 'Hello World 2',
		// 	'text'=> 'Some Test',
		// 	'img' => 'ldldld',
		// 	'alias' => 'kdjfie'
		// ]);

		//Delete
		// $article = Article::find(6);
		// $article->delete();

		// Article::destroy(7);


		//Soft deleted
		// $article = Article::find(5);
		// $article->delete();


		$articles = Article::all();



		dump($articles);

		return;
	}

	public function getArticle($id){
		echo "Res from ".$id;
	}
}
