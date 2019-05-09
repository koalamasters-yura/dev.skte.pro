<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>

<section class="well9 bg-light cform">
	<div class="container text-center">
		<h3><?=GetMessage("CONTACT_FORM")?></h3>
		<hr class="hr__mod"/>
		
		<?if(!empty($arResult["ERROR_MESSAGE"]))
		{
			foreach($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{
			?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
		}
		?>
		
		<form class="contacts_fb" method="POST" action="<?=POST_FORM_ACTION_URI?>">
		<?=bitrix_sessid_post()?>
			<div class="fieldset row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label>
						<input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
					</label>

					<label>
						<input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?>*" value="<?=$arResult["AUTHOR_EMAIL"]?>">
					</label>

					<label>
						<input type="text" name="user_phone" placeholder="<?=GetMessage("MFT_PHONE")?>" value="<?=$arResult["AUTHOR_PHONE"]?>">
					</label>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="textarea">
						<textarea name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>*"><?=$arResult["MESSAGE"]?></textarea>
					</label>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="cf_controls">
						<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
						<input class="cf_submit" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<script>
	$('form.contacts_fb input[name="user_phone"]').mask("+38 (999) 999-99-99");
	$('form.contacts_fb input[name="user_phone"]').attr("placeholder", "+38 (000) 000-00-00");
</script>