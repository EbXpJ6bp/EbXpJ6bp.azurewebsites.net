<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#  article: http://ogp.me/ns/article#">

	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta content="<?php echo $desc; ?>" name="description">
	<meta name="application-name" content="Nephy Project">

	<!-- Microsoft
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Google
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="google" content="notranslate">

	<!-- Twitter
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="twitter:card" content="summary_large_image">

	<!-- OGP
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta property="og:site_name" content="<?php echo $title; ?>">
	<meta property="og:description" content="<?php echo $desc; ?>">
	<meta property="og:url" content="<?php echo $fullurl;?>">
	<meta property="og:type" content="website">
	<meta property="og:email" content="admin@nephy.jp">

	<!-- favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="/assets/img/logo_icon.png" rel="icon">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/logo_icon.png">

	<!-- Apple
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">

	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/animate.css" rel="stylesheet">
	<style>
		@font-face {
			font-family: 'mplus-1p-regular';
			src: url('/assets/fonts/mplus-1p-regular.ttf') format("truetype");
		}

		@font-face {
			font-family: "Stroke";
			src: url('/assets/fonts/Stroke-Light.otf') format("opentype");
		}

		.stroke {
			font-family: Stroke, "Hiragino Kaku Gothic ProN", "游ゴシック", YuGothic, Meiryo, sans-serif;
		}

		.stroke_title {
			font-family: Stroke, "Hiragino Kaku Gothic ProN", "游ゴシック", YuGothic, Meiryo, sans-serif;
			letter-spacing: 0.05em;
			font-size: 3em;
		}

		.stroke_id {
			font-family: Stroke, "Hiragino Kaku Gothic ProN", "游ゴシック", YuGothic, Meiryo, sans-serif;
			letter-spacing: 0.05em;
		}

		.stroke_profile {
			font-family: Stroke, "Hiragino Kaku Gothic ProN", "游ゴシック", YuGothic, Meiryo, sans-serif;
			letter-spacing: 0.05em;
			font-weight: bold;
		}

		body {
			/*	不明
				opacity_: 0,background:#F5F5F5;*/
			font-family: 'mplus-1p-regular', 'Hiragino Kaku Gothic ProN', '游ゴシック', 'YuGothic', 'sans-serif', 'Meiryo UI' !important;
			font-size: 15px;
		}

		div#contents {
			opacity: 0;
			position: static;
		}

		div.container {
			max-width: 95%;
		}

		div.modal-backdrop {
			z-index: 900;
		}

		div#navbar-main {
			font-size: 12px;
		}

		ul.dropdown-menu {
			font-size: 14px;
		}

		a:link, a:visited {
			color: #0088cc;
		}

		a:hover {
			text-decoration: underline;
		}

		.shadow {
			text-shadow: 2px 2px 4px black;
		}

		.smalltext {
			font-size: 12px;
		}

		.infotext {
			color: #808080;
		}

		a#stats {
			color: #7cfc00;
		}

		table {
			background-color: #ffffff;
			border-spacing: 0;
			font-size: 13px;
			margin: 0 auto;
		}

			table.log {
				-ms-word-wrap: break-word;
				word-wrap: break-word;
			}

		th.sort, td.sort {
			text-align: center;
			vertical-align: middle;
		}

		tr:nth-child(2n) {
			background: #eee;
		}

		img.frame {
			border-radius: 6px;
		}

		img.icon {
			border-radius: 3px;
		}
	</style>

</head>
