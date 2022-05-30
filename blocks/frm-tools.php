<section class="frm-tools">
	<div class="frm-tools__wrap wrapper">
		<h2 class="frm-tools__title-block">Форум</h2>
		<div class="frm-tools__container-btns-topic-n-btn-new-topic">
			<div class="frm-tools__box-btns-topic">
				<h4 class="frm-tools__btns-topic-desc">Показывать:</h4>
				<button class="frm-tools__topic-btn _is-active" type="button">Все</button>
				<button class="frm-tools__topic-btn" type="button">Открытые</button>
				<button class="frm-tools__topic-btn" type="button">Закрытые</button>
			</div>
			<button class="frm-tools__new-topic-btn">
				<img class="frm-tools__new-topic-btn-img" src="/img/add.png" alt="Иконка добавления">
				<p class="frm-tools__new-topic-btn-text">Создать тему</p>
			</button>
		</div>
		<div class="frm-tools__container-search-input-n-search-btn">
			<div class="frm-tools__box-search-input">
				<input class="frm-tools__search-input" type="text" placeholder="Введите название темы">
			</div>
			<button class="frm-tools__search-btn btn-fourth" type="button">Поиск</button>
		</div>
		<div class="frm-tools__container-all-forum-topic">
			<? require ("../blocks/topic.php") ?>
			<? require ("../blocks/topic.php") ?>
			<? require ("../blocks/topic.php") ?>
		</div>
		
		
		
	</div>
</section>