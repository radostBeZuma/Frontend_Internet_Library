<section class="new-article">
	<div class="new-article__wrap wrapper">
		<h1 class="new-article__head-text">Добавление статьи</h1>
		<input class="new-article__input input-tertiary" type="text" name="name-article" placeholder="Название">
		<input class="new-article__input input-tertiary" type="text" name="author" placeholder="Автор">
		<input class="new-article__input input-tertiary" type="text" name="topic" placeholder="Тема">
		<textarea class="new-article__textarea textarea-primary" name="anounce" placeholder="Анонс"></textarea>
		<textarea class="new-article__textarea textarea-primary" name="content" placeholder="Содержимое статьи"></textarea>
		<div class="new-article__container-upload-file">
			<div class="new-article__box-upload">
				<p class="new-article__placeholder-text-upload">Картинка</p>
				<!-- не забыть проставить правильные accept`ы -->
				<input class="new-article__input-upload" type="file" id="upload-file-01" accept="image/*">
				<div class="new-article__upload-fake input-tertiary">
					<p class="new-article__upload-text-file">Текст загружаемого файла</p>
				</div>
				<label class="new-article__upload-label" for="upload-file-01">
					<div class="new-article__upload-btn-fake btn-upload">
						<img class="new-article__img-b" src="/core/img/upload-b.png" alt="Загрузка файла">
						<img class="new-article__img-w" src="/core/img/upload-w.png" alt="Загрузка файла">
					</div>
				</label>
			</div>
		</div>
		<div class="new-article__container-add-btn">
			<button class="btn-fourth new-article__add-btn" type="button">Добавить статью</button>
		</div>
	</div>
</section>