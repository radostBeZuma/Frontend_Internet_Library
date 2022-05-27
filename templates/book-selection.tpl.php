<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- ALL-page Css init -->
		<link rel="stylesheet" href="/css/entry/variables.css">
		<link rel="stylesheet" href="/css/entry/fonts.css">
		<link rel="stylesheet" href="/css/entry/reset-style.css">
		<link rel="stylesheet" href="/css/entry/components.css">
	<!-- ALL-page Css init end -->

	<!-- index-page css init -->
		<link rel="stylesheet" href="/css/blocks/header.css">
		<link rel="stylesheet" href="/css/blocks/page-navigation.css">
		<link rel="stylesheet" href="/css/blocks/select-books.css">
		<link rel="stylesheet" href="/css/blocks/book.css">
		<link rel="stylesheet" href="/css/blocks/ann-quote.css">
		<link rel="stylesheet" href="/css/blocks/footer.css">
	<!-- index-page css init end -->

	<title>Подбор книги</title>
</head>
<body>
	<div class="wrapper">
		<? require_once("../blocks/header.php") ?>
		<div class="mt40">
			<? require_once("../blocks/page-navigation.php") ?>
		</div>
		<div class="mt50">
			<? require_once("../blocks/select-books.php") ?>
		</div>
		<div class="mt110">
			<? require_once("../blocks/ann-quote.php") ?>
		</div>
	</div>

	<div class="mt110">
		<? require_once("../blocks/footer.php") ?>
	</div>
</body>
</html>