<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="well3 text-center bg-light">
	<div class="container">
		<h3><?=GetMessage("RECENT_PROJECTS")?></h3>
		<hr class="hr__mod">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => "/include/main_portfolio_text.php"
			)
		);?>
	</div>
	
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-sm-4 col-sm-4 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="thumbnail">
						<div class="caption" data-equal-group="1">
							<h4><?=$arItem["NAME"]?></h4>
							<?echo $arItem["PREVIEW_TEXT"];?>
							<a class="btn-link fa  fa-arrow-circle-o-right" href="<?=$arItem["DETAIL_PAGE_URL"]?>"></a>
						</div>
						<a class="thumb" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"/>
							<span class="thumb_overlay"></span>
						</a>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
	
	<a href="/portfolio/" class="btn btn-primary btn-lg"><?=GetMessage("VIEW_ALL_PROJECTS")?></a>
	
</section>