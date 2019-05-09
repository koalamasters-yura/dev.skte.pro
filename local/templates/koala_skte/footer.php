<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 

    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer>

        <section>
            <div class="container center767">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h5>
                            <?=GetMessage("KOALA_COPYRIGHT");?>
                        </h5>

                        <p>
                            <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/bottom_logo.php"
								)
							);?>
							&#169;
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/bottom_copy.php"
								)
							);?>
                        </p>

                        <ul class="inline-list">
                            <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/bottom_socials.php"
								)
							);?>
                        </ul>
                    </div>


                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h5>
                            <?=GetMessage("KOALA_CONTACTS");?>
                        </h5>

                        <div class="contact-info">
                            <address>9863 - 9867 Mill Road,<br/>Cambridge, MG09 99HT.</address>
                            <dl>
                                <dt><?=GetMessage("KOALA_TEL");?></dt>
                                <dd>
                                    <?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/bottom_phone.php"
										)
									);?>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?=GetMessage("KOALA_EMAIL");?></dt>
                                <dd>
                                    <?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/bottom_email.php"
										)
									);?>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=SITE_TEMPLATE_PATH;?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH;?>/js/tm-scripts.js"></script>
<!-- </script> -->


</body>
</html>
