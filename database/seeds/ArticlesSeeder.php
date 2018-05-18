<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// #1
        // DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES(?,?,?)', [
		// 	'Blog post',
		// 	'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>',
		// 	'pic1.jpg',
		//	'post1'
		// ]);

		// #2
		// DB::table('articles')->insert(
		// 	[
		// 		[
		// 			'name' => 'Sample blog',
		// 			'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>'
		// 			'pic' => 'pic1.jpg',
		//			'alias' => 'post1'
		// 		],
		// 		[
		// 			'name' => 'Post of blog 2',
		// 			'text' => '<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>',
		// 			'pic' => 'pic2.jpg',
		//			'alias' => 'post2'
		// 		],
		// 		[
		// 			'name' => 'Post of blog 3',
		// 			'text' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>',
		// 			'pic' => 'pic3.jpg',
		//			'alias' => 'post3'
		// 		]
		// 	]
		// );

		// #3
		Article::create([
			'name' => 'Sample blog 1',
			'text' => 'Hello Peoples',
			'img' => 'pic1.jpg',
			'alias' => 'post1'
		]);
    }
}
