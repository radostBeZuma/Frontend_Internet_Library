<section class="user-change">
	<div class="user-change__wrap wrapper">
		<h1 class="user-change__title">Личный кабинет</h1>
		<div class="user-change__container-user-tools">
			<div class="user-change__container-user-change-img-n-user-change-info">
				<div class="user-change__container-change-img-n-upload-input-n-del-btn">
					<div class="user-change__box-change-img">
						<!-- onerror убирает значок битой картинки, что меншает хорошо выглядить дизайну -->
						<img class="user-change__change-img" src="/img/human.jpg" width="200px" height="200px" onerror="this.style.visibility='hidden'" >
					</div>
					<div class="user-change__box-upload-input">
						<form>
							<input class="user-change__upload-input-file" type="file" id="fileUpload">
							<button class="user-change__upload-btn-fake btn-primary" type="button">
								<label class="user-change__upload-label" for="fileUpload">Загрузить фото</label>
							</button>
						</form>
					</div>
					<div class="user-change__box-delete-btn">
						<button class="user-change__delete-btn">
							<img class="user-change__delete-icon" src="/img/delete.png" alt="Иконка">
							<span class="user-change__delete-text">Удалить фото</span>
						</button>
					</div>
				</div>
				<div class="user-change__container-change-name-n-login">
					<div class="user-change__box-edit-input">
						<p class="user-change__placeholder-edit-input">Имя</p>
						<div class="user-change__inner-edit-input-n-btn">
							<input class="user-change__edit-input input-secondary input-secondary--with-icon" type="text">
							<button class="user-change__edit-text-btn">
								<img class="user-change__edit-img" src="/img/edit.png" alt="Иконка">
							</button>
						</div>
					</div>
					<div class="user-change__box-edit-input">
						<p class="user-change__placeholder-edit-input">Логин</p>
						<div class="user-change__inner-edit-input-n-btn">
							<input class="user-change__edit-input input-secondary input-secondary--with-icon" type="text">
							<button class="user-change__edit-text-btn">
								<img class="user-change__edit-img" src="/img/edit.png" alt="Иконка">
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="user-change__container-change-current-pass-n-new-pass">
				<h4 class="user-change__block-title">Изменить пароль</h4>
				<div class="user-change__box-edit-pass">
					<p class="user-change__name-input">Текущий пароль</p>
					<input class="user-change__edit-pass-input input-secondary input-secondary--no-icon" type="text">
				</div>
				<div class="user-change__box-edit-pass">
					<p class="user-change__name-input">Новый пароль</p>
					<input class="user-change__edit-pass-input input-secondary input-secondary--no-icon" type="text">
				</div>
				<div class="user-change__box-edit-btn">
					<button class="user-change__edit-btn">
						<img class="user-change__edit-btn-img" src="/img/edit-white.png" alt="Иконка">
						<span class="user-change__edit-btn-text">Изменить пароль</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>


