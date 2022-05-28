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

	<!-- page css init-->
		<link rel="stylesheet" href="/css/pages/detail-book-page.css">
	<!-- page css init end -->

	<!-- detail-book-page css init -->
		<link rel="stylesheet" href="/css/blocks/header.css">
		<link rel="stylesheet" href="/css/blocks/page-navigation.css">
		<link rel="stylesheet" href="/css/blocks/part-book.css">

		<link rel="stylesheet" href="/css/blocks/footer.css">
	<!-- detail-book-page css init end -->

	
	
	<title>Детальная страница книги</title>
</head>
<body>
	<? require_once("../blocks/header.php") ?>
	<div class="wrapper">
		<? require_once("../blocks/page-navigation.php") ?>
		<? require_once("../blocks/part-book.php") ?>
	</div>
	<? require_once("../blocks/footer.php") ?>
</body>
</html>