<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<!--
<section class="well8">
	<div class="container text-center center767">
		<h3></h3>

		<hr class="hr__mod"/>
-->

		<div class="portfolio_photo">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>">
		</div>
		<div class="portfolio_text">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>

	</div>
</section>

<?if($arResult["DISPLAY_PROPERTIES"]["PHOTOS"]["FILE_VALUE"][0]["SRC"] != ""){?>
	<section class="well9 bg-light">
		<div class="container text-center">
			<h3><?=GetMessage("ADD_PHOTOS")?></h3>

			<hr class="hr__mod"/>

			<div class="portfolio_gallery gallery gallery__">
				<?$counter = 0;?>
				<?foreach($arResult["DISPLAY_PROPERTIES"]["PHOTOS"]["FILE_VALUE"] as $photo){?>
					<?++$counter;?>
					<div class="img wow <?if(($counter % 3) == 1){echo 'fadeInLeft';}elseif(($counter % 3) == 0){echo 'fadeInRight';}?>">
						<a class="thumb" data-fancybox-group='4' href="<?=$photo["SRC"]?>" style="background-image: url(<?=$photo["SRC"]?>);">
							<span class="thumb_overlay"></span>
						</a>
					</div>
				<?}?>
			</div>
		</div>
	</section>
<?}?>