<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="camera_container">
	<div id="camera" class="camera_wrap">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
			<div class="camera_caption fadeIn">
				<div class="camera-content">
					<h2>
						<em><?=$arItem["NAME"]?></em>
					</h2>

					<p>
						<?=$arItem["PREVIEW_TEXT"];?>
					</p>
				</div>
			</div>
		</div>
	<?endforeach;?>

	</div>
</div>