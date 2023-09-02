<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$site_path="https://www.istu.edu/";
$APPLICATION->ShowHead();
$APPLICATION->ShowPanel();
$APPLICATION->AddHeadString('<meta charset="utf-8">',true);
header("Content-Type: text/html; charset=utf-8");

$APPLICATION->IncludeComponent(
	"olegpro:olegpro.csscompiler",
	"",
	array(
		"PATH" => SITE_TEMPLATE_PATH."/scss/",
		"FILES" => array(
			0 => "styles.scss",
		),
		"PATH_CSS" => SITE_TEMPLATE_PATH."/",
		"CLASS_HANDLER" => "\\Olegpro\\Csscompiler\\SCSSCompiler",
		"USE_SETADDITIONALCSS" => "Y",
		"ADD_CSS_TO_THE_END" => "Y",
		"REMOVE_OLD_CSS_FILES" => "Y",
		"TARGET_FILE_MASK" => "template_styles_%s.css"
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>

<header>
<div class="first">
  <div class="wrap-logo">
  <a href="#" class="logo">
<object type="image/svg+xml" data="<?echo SITE_TEMPLATE_PATH ?>/images/logo_ipolytech.svg" height="94px" ></object>
</a>
  </div>
 <nav>

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"nav_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "section",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "section",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "nav_menu"
	),
	false
);?>




  </nav>

</div><nav><div>
			<div id="dateweek" class="dataweek">09 августа 2023 <span>|</span> <span>неделя <b>четная</b></span></div>
			<div id="view-variant">
				<a href="/" class="var frus">РУС</a>
				<a href="http://www.eng.istu.edu/" class="var feng" target="_blank">ENG</a>
				<a href="<?echo $site_path ?>/?special=vkl" class="fspec fspec-on" itemprop="copy">Для слабовидящих</a>
				<a href="<?echo $site_path ?>/?special=vikl" class="fspec fspec-off" itemprop="copy">Обычный вид</a>
				<a href="https://t.me/polytech_irk"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/telegram.svg" alt="telegram" style="width: 24px; height: 24px; border-radius: 5px;"></a>
				<a href="https://vk.com/polytech_irk"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/vk.svg" alt="vk" style="width: 24px; height: 24px;"></a>
				<a href="https://ok.ru/politech.irk"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/оdnoklassniki.svg" alt="odnoklassniki" style="width: 24px; height: 24px;"></a>
				<a href="https://www.youtube.com/channel/UCqSPPbdUFfDR57Nj8NshEDg"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/yt.svg" alt="fb" style="width: 24px; height: 24px;"></a>
				<a href="https://bit.ly/3M4NiMl"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/dzen_logo.svg" alt="dzen" style="width: 24px; height: 24px;"></a>
				<a href="https://rutube.ru/channel/24598885/"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/rutube_logo.svg" alt="rutube" style="width: 24px; height: 24px;"></a>
				<a href="http://buy.istu.edu/"><img src="<?echo $site_path ?>/bitrix/templates/edu.2017/page_templates/normal_new/img/buy.svg" alt="buy.istu.edu" style="width: 24px; height: 24px;"></a>
			</div>
		</div></nav></header>
