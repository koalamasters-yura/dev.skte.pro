<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<main>

	<section class="well6 text-center">

		<div class="container">
			<h3>
				Contact info
			</h3>
			<hr class="hr__mod">
			<div class="map">
				<iframe src="https://yandex.ru/map-widget/v1/-/CBUhV8XGOC" width="1170" height="456" frameborder="0"></iframe>
			</div>

			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => "/include/contacts_text.php"
				)
			);?>

			<div class="row offs4">
				<div class="contact">
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
						<span class="fa fa-envelope"></span>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts_email.php"
							)
						);?>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12 mg-add wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
						<span class="fa fa-mobile"></span>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts_phone.php"
							)
						);?>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12 mg-add2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
						<span class="fa fa-map-marker"></span>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts_address.php"
							)
						);?>
					</div>
				</div>

			</div>

		</div>
	</section>

	<?$APPLICATION->IncludeComponent(
		"koala:main.feedback",
		"contact_form",
		Array(
			"AJAX_MODE" => "Y",
			"EMAIL_TO" => "admin@skte.pro",	// E-mail, на который будет отправлено письмо
			"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
				0 => "7",
			),
			"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
			"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
				0 => "EMAIL",
				1 => "MESSAGE",
			),
			"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		),
		false
	);?>

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>