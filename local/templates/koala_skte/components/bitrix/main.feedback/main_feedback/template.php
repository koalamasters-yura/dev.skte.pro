<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>

<section class="well5 text-center">
	<div class="container">
		<h3>
			<?=GetMessage("FEEDBACK")?>
		</h3>
		<p class="text-uppercase p__mod">
			<?=GetMessage("FEEDBACK_TEXT")?>
		</p>
		<hr class="hr__mod">

		<div class="main_fb">
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
			<form class="fb_form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
				<?=bitrix_sessid_post()?>
				<div class="fieldset">
					<label data-add-placeholder="">
						<input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
					</label>
					
					<label data-add-placeholder="">
						<input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?>*" value="<?=$arResult["AUTHOR_EMAIL"]?>">
					</label>
					
					<label data-add-placeholder="" class="textarea">
						<textarea name="MESSAGE" rows="5" cols="40" placeholder="<?=GetMessage("MFT_MESSAGE")?>*"><?=$arResult["MESSAGE"]?></textarea>
					</label>
					
					<?if($arParams["USE_CAPTCHA"] == "Y"):?>
						<div class="mf-captcha">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
							<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
							<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
							<input type="text" name="captcha_word" size="30" maxlength="50" value="">
						</div>
					<?endif;?>
					
					<div>
						<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
						<input class="main_fb_submit" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
					</div>
				</div>
			</form>
		</div>
	</div>

</section>