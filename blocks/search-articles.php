<section class="search-articles">
	<h2 class="search-articles__title">Блог</h2>
	<p class="search-articles__desc">Самые интересные статьи и лучшие подборки находятся здесь</p>
	<div class="search-articles__box-search-input-n-btn-search">
		<input class="search-articles__search-input input-primary" type="text" placeholder="Введите название статьи">
		<button class="search-article__btn-search">
			<img class="search-article__img-search" src="/img/search.png" alt="Кнопка поиска">
		</button>
	</div>
	<div class="search-articles__container-all-articles">
		<? require("../blocks/article.php") ?>
		<? require("../blocks/article.php") ?>
	</div>
</section>