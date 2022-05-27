<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Главная страница</title>

	<!-- ALL-page Css init -->
		<link rel="stylesheet" href="/css/entry/variables.css">
		<link rel="stylesheet" href="/css/entry/fonts.css">
		<link rel="stylesheet" href="/css/entry/reset-style.css">
		<link rel="stylesheet" href="/css/entry/components.css">
	<!-- ALL-page Css init end -->

	<!-- index-page css init -->
		<link rel="stylesheet" href="/css/blocks/header.css">
		<link rel="stylesheet" href="/css/blocks/welcome-block.css">
		<link rel="stylesheet" href="/css/blocks/popular-books.css">
		<link rel="stylesheet" href="/css/blocks/book.css">
		<link rel="stylesheet" href="/css/blocks/ad-forum.css">
		<link rel="stylesheet" href="/css/blocks/recommendation.css">
	<!-- index-page css init end -->
</head>
<body>
	<div class="wrapper">
		<? require_once("../blocks/header.php") ?>
		<div class="mt110">
			<? require_once("../blocks/welcome-block.php") ?>
		</div>
		<div class="mt110">
			<? require_once("../blocks/popular-books.php") ?>
		</div>
		<div class="mt75">
			<? require_once("../blocks/advert-forum.php") ?>
		</div>
	</div>

	<div class="mt110">
		<? require_once("../blocks/recommendation.php") ?>
	</div>

	<div class="wrapper wrapper-dev">
		
	</div>
</body>
</html>