<section class="select-books">
	<div class="select-books__container-title-n-help-btn">
		<h2 class="select-books__title">Подобрать книгу</h2>
		<button class="select-books__help-btn" type="button">
			<img class="select-books__help-img" src="/img/help.png" alt="Помощь">
		</button>
	</div>
	<div class="select-books__container-input-n-btns-filter-n-btn-reset">
		<div class="select-books__box-input-n-search-btn">
			<input class="select-books__input input-primary" type="text" placeholder="Введите название или автора книги">
			<button class="select-books__search-btn">
				<img class="select-books__search-img" src="/img/search.png" alt="Поиск">
			</button>
		</div>
		<div class="select-books__box-btns-filter">
			<button class="select-books__btn-filter btn-filter" type="button">Жанры</button>
			<button class="select-books__btn-filter btn-filter" type="button">Категории</button>
			<button class="select-books__btn-filter btn-filter" type="button">Возраст</button>
			<button class="select-books__btn-filter btn-filter" type="button">Теги</button>
			<button class="select-books__btn-filter btn-filter" type="button">Место действия</button>
			<button class="select-books__btn-filter btn-filter" type="button">События</button>
			<button class="select-books__btn-filter btn-filter" type="button">Год написания</button>
			<button class="select-books__btn-filter btn-filter" type="button">Язык</button>
		</div>
		<div class="select-books__box-btn-reset">
			<p class="select-books__title-btn">Сбросить фильтры</p>
			<button class="select-books__btn-reset" type="button">
			<img class="select-books__img-reset" src="/img/reset.png" alt="Помощь">
		</button>
		</div>
		
	</div>
	<div class="select-books__container-all-books">
		<div class="select-books__box-line-books">
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
		</div>
		<div class="select-books__box-line-books">
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
		</div>
		<div class="select-books__box-line-books">
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
		</div>
		<div class="select-books__box-line-books">
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
			<? require("../blocks/book.php") ?>
		</div>
	</div>
	<div class="select-books__container__btn-show-more">
		<button class="select-books__btn-show-more btn-secondary" type="button">Показать еще</button>
	</div>
</section>