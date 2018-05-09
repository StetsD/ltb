<?php

	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;

	class Core extends Controller {

		public function getArticles(){

		}

		public function getArticle($id){
			echo 'Id is '.$id;
		}

	}

?>
