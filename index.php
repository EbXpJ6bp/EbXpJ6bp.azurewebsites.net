<?php
include '/my/www/include/getallheaders.php';
header('Access-Control-Allow-Origin: *');
$header = getallheaders();
$url = rtrim($_SERVER['REQUEST_URI'], '/');
$RequestURI = parse_url($url);
$BaseURL = 'http://nephy.jp';
$RequestPath = explode("/",$RequestURI['path']);
$fullurl = $BaseURL . $_SERVER['REQUEST_URI'];
$docroot = '/my/www/nephy.jp';

function Return404(){
	$title = "404 - File Not Found | Nephy Project";
	$desc = "お探しのページは見つかりませんでした。";
	if (!isset($header['X-Pjax'])) {
		include 'include/header.php';
		include 'include/nav.php';
		include 'include/page/404.php';
		include 'include/footer.php';
	} else {
		include 'include/page/404.php';
	}
}

if(empty($RequestPath[1])){
	$title = "Top | Nephy Project";
	$desc = "Nephy Projectの公式サイトです。";
	if (!isset($header['X-Pjax'])) {
		include 'include/header.php';
		include 'include/nav.php';
		include 'include/page/index.php';
		include 'include/footer.php';
	} else {
		include 'include/page/index.php';
	}
}else{
	if($RequestPath[1] == 'projects'){
		if(!isset($RequestPath[2])){
			$title = "開発 | Nephy Project";
			$desc = "Nephy Project Teamが計画したプロジェクトをまとめています。";
			if (!isset($header['X-Pjax'])) {
				include 'include/header.php';
				include 'include/nav.php';
				include 'include/page/projects/index.php';
				include 'include/footer.php';
			} else {
				include 'include/page/projects/index.php';
			}
		}elseif($RequestPath[2] == "nephy"){
			$title = "Nephy - Twitter クライアント | Nephy Project";
			$desc = "Nephy Project Teamが開発中のTwitterクライアント「Nephy」についてまとめています。";
			if (!isset($header['X-Pjax'])) {
				include 'include/header.php';
				include 'include/nav.php';
				include 'include/page/projects/nephy.php';
				include 'include/footer.php';
			} else {
				include 'include/page/projects/nephy.php';
			}
		}else{
			header("HTTP/1.1 404 Not Found");
			$url = $BaseURL."/projects";
			header("Location: {$url}");
		}
	}else{
		Return404();
	}
}
?>
