	<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	/** @var array $arParams */
	/** @var array $arResult */
	/** @global CMain $APPLICATION */
	

/** @global CUser $USER */
	/** @global CDatabase $DB */
	/** @var CBitrixComponentTemplate $this */
	/** @var string $templateName */
	/** @var string $templateFile */
	

/** @var string $templateFolder */
	/** @var string $componentPath */
	/** @var CBitrixComponent $component */
	$this->setFrameMode(true);
	?>


  <meta charset="utf-8">
	  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<div class="news-list pc">
	  <div class="slider">
	    <div 

class="slider__wrapper">
	      <div class="slider__items">
	      	
	      	<?$count=0;
	      	
	      	foreach($arResult["ITEMS"] as $arItem):?>
	

			<?
		

	

		$this->AddEditAction(
						$arItem['ID'],
						$arItem['EDIT_LINK'],
				

	

	CIBlock::GetArrayByID(
							$arItem["IBLOCK_ID"],
							"ELEMENT_EDIT"
			

	

		)
					);
					$this->AddDeleteAction(
						$arItem['ID'],
		

	

			$arItem['DELETE_LINK'],
						CIBlock::GetArrayByID(
							$arItem

["IBLOCK_ID"],
		

					"ELEMENT_DELETE"),
						array("CONFIRM" => GetMessage

('CT_BNL_ELEMENT_DELETE_CONFIRM'))
				

	);
				?>




<div class="slider__item">
	         	<?
	         	foreach($arItem["FIELDS"] as $code=>$value):?>
	         	
	         	
	

        <?
	        	$arr=explode(",",$value);
	        	$count++;
	        	foreach($arr as $code):
			$code=trim($code);
     	switch ($code) {
    case "Наука":?>
    	<span class="news-tags<?=$count?>" style="color: #fff; background: #5fa8ed;">
        <?break;
 

   case "Абитуриентам":?>
        <span class="news-tags<?=$count?>" style="color: #ffa; background: #faae10;">
        	  <?break;
 

   case "Инновации":?>
        <span class="news-tags<?=$count?>" style="color: #ffa; background: #faae10;">
        	  

<?break;
 

   case "Выпускникам и работодателям":?>
        <span class="news-tags<?=$count?>" style="color: #ffa; background: #faae10;">
        	  <?break;
 

   case "Студентам":?>
        <span 

class="news-tags<?=$count?>" style="color: #ffa; background: #faae10;">
        	
<?break;}?>
				<?=$code;?>
				

</span>		<?endforeach;?>
			

<?endforeach;?>
		<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && 

is_array($arItem

["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
		

		

	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
							class="preview_picture"
							

border="0"
	

						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							width="<?=$arItem

["PREVIEW_PICTURE"]

["WIDTH"]?>"
							height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
							

alt="<?=$arItem

["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						

	

style="float:left"
							/></a>
				<?else:?>
					<img
				

	

	class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
		

	

			width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
		

	

			alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
			

	

		style="float:left"
						/>
				<?endif;?>
			<?endif?>
			

<?if

($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
				<span class="news-list-icon news-list-icon-calendar"></span>
				

<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
			<?endif?>
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
	

			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?echo 

$arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
				<?else:?>
					<b><?echo $arItem["NAME"]?></b><br />
		

		<?endif;?>
			<?endif;?>
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				

<div style="clear:both"></div>
			<?endif?>
			</div>
		
	<?endforeach;?>
	<div class="btm-slides">
	  <span onclick="btm_slide

(1)"></span>
	  <span onclick="btm_slide(2)"></span>
	  <span onclick="btm_slide(3)"></span>
	  <span onclick="btm_slide(4)"></span>
	  <span onclick="btm_slide(5)"></span>
	  </div>
	

<div class="pokazatel-snimka left" onclick="side_slide(-1)">
	  <span class="fas fa-angle-left"></span>
	  </div>
	<div class="pokazatel-snimka right" onclick="side_slide

(1)">
	  <span class="fas fa-angle-right"></span>
	  </div> </div>
	</div>
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
    </div>  </div>