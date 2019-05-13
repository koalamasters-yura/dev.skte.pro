<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?$counter = 0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?
	++$counter;
	if(($counter % 3) == 1){
	?>
	<div class="row <?if($counter == 1){echo 'offs';}?>">
	<?}?>
		<div class="col-sm-4 col-sm-4 col-xs-12">
			<div class="thumbnail">
				<div class="caption" data-equal-group="2">
					<h4>
						<?=$arItem["~NAME"]?>
					</h4>
					<?echo $arItem["PREVIEW_TEXT"];?>
					<a class="btn-link fa  fa-arrow-circle-o-right" href="<?=$arItem["DETAIL_PAGE_URL"]?>"></a>
				</div>
				<a class="thumb" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"/>
					<span class="thumb_overlay"></span>
				</a>
			</div>
		</div>
	<?if(($counter % 3) == 0){?>
	</div>
	<?}?>
<?endforeach;?>