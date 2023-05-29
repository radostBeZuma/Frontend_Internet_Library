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

	<!-- page css init-->
		<link rel="stylesheet" href="/css/pages/index-page.css">
	<!-- page css init end -->

	<!-- index-page css init -->
		<link rel="stylesheet" href="/css/blocks/header.css">
		<link rel="stylesheet" href="/css/blocks/welcome-block.css">
		<link rel="stylesheet" href="/css/blocks/popular-books.css">
		<link rel="stylesheet" href="/css/blocks/book.css">
		<link rel="stylesheet" href="/css/blocks/ad-forum.css">
		<link rel="stylesheet" href="/css/blocks/recommendation.css">
		<link rel="stylesheet" href="/css/blocks/question-tool.css">
		<link rel="stylesheet" href="/css/blocks/registration.css">
		<link rel="stylesheet" href="/css/blocks/auth.css">
		<link rel="stylesheet" href="/css/blocks/footer.css">
	<!-- index-page css init end -->
</head>
<body>
	<? require ("blocks/header.php") ?>
	<? require ("blocks/welcome-block.php") ?>
	<? require ("blocks/popular-books.php") ?>
	<? require ("blocks/advert-forum.php") ?>
	<? require ("blocks/recommendation.php") ?>
	<? require ("blocks/question-tool.php") ?>
	<? require ("blocks/registration.php") ?>
	<? require ("blocks/auth.php") ?>
	<? require ("blocks/footer.php") ?>

    <script src="js/form.js"></script>
</body>
</html>