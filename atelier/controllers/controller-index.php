<?php

require __DIR__.'/../views/view-index.php';


/*

function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
    return $bdd;
}

function getArticles() {
	$bdd = getBdd();
    $articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}

function getArticle($id) {
	$bdd = getBdd();
    // ...
}


$articles = getArticles();
$bdd = getBdd();


class Article {
	private static function getBdd() {
	    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
	    return $bdd;
	}

	public static function getAll() {
	    $bdd = self::getBdd();
	    $articles = $bdd->query('select * from t_article order by art_id desc');
	    return $articles;
	}	
	public static function get($id) {
	    $bdd = self::getBdd();
	    // ...
	}	
}

$articles = Article::getAll();
// $bdd = Article::getBdd(); 

*/