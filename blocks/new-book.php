<section class="new-book">
	<div class="new-book__wrap wrapper">
		<h1 class="new-book__head-text">Добавление книги</h1>
		<div class="new-book__container-all-info">
			<input class="new-book__input input-tertiary" type="text" name="name-book" placeholder="Название">
			<textarea class="new-book__textarea textarea-primary" name="anounce" placeholder="Анонс"></textarea>
			<input class="new-book__input input-tertiary" type="text" name="author" placeholder="Автор">
			<input class="new-book__input input-tertiary" type="text" name="genre" placeholder="Жанр">
			<input class="new-book__input input-tertiary" type="text" name="tags" placeholder="Теги">
			<input class="new-book__input input-tertiary" type="text" name="date" placeholder="Дата">
			<input class="new-book__input input-tertiary" type="text" name="age-rest" placeholder="Возрастные ограничения">
			<input class="new-book__input input-tertiary" type="text" name="develop" placeholder="События">
			<input class="new-book__input input-tertiary" type="text" name="lang" placeholder="Язык">
			<input class="new-book__input input-tertiary" type="text" name="location" placeholder="Место событий">
			<input class="new-book__input input-tertiary" type="text" name="category" placeholder="Категория">
		</div>
		<div class="new-book__container-uploads-boxs">
			
			<div class="new-book__box-upload">
				<p class="new-book__placeholder-text-upload">Файл книги</p>
				<!-- не забыть проставить правильные accept`ы -->
				<input class="new-book__input-upload" type="file" id="upload-file-01" accept="image/*">
				<div class="new-book__upload-fake input-tertiary">
					<p class="new-book__upload-text-file">Текст загружаемого файла</p>
				</div>
				<label class="new-book__upload-label" for="upload-file-01">
					<div class="new-book__upload-btn-fake btn-upload">
						<img class="new-book__img-b" src="/core/img/upload-b.png" alt="Загрузка файла">
						<img class="new-book__img-w" src="/core/img/upload-w.png" alt="Загрузка файла">
					</div>
				</label>
			</div>

			<div class="new-book__box-upload">
				<p class="new-book__placeholder-text-upload">Картинка для обложки</p>
				<!-- не забыть проставить правильные accept`ы -->
				<input class="new-book__input-upload" type="file" id="upload-file-02" accept="image/*">
				<div class="new-book__upload-fake input-tertiary">
					<p class="new-book__upload-text-file">Текст загружаемого файла</p>
				</div>
				<label class="new-book__upload-label" for="upload-file-02">
					<div class="new-book__upload-btn-fake btn-upload">
						<img class="new-book__img-b" src="/core/img/upload-b.png" alt="Загрузка файла">
						<img class="new-book__img-w" src="/core/img/upload-w.png" alt="Загрузка файла">
					</div>
				</label>
			</div>
		</div>
		<div class="new-book__container-add-btn">
			<button class="btn-fourth new-book__add-btn" type="button">Добавить книгу</button>
		</div>
	</div>
</section>