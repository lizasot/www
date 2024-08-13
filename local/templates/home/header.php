<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?$APPLICATION->ShowHead();?>
	<link rel="stylesheet"
	  href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fonts/icomoon/style.css">
	
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery-ui.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/mediaelementplayer.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/animate.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/fl-bigmug-line.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/aos.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div class="site-loader"></div>

	<div class="site-wrap">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div class="site-mobile-menu">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div> <!-- .site-mobile-menu -->

		<div class="border-bottom bg-white top-bar">
			<div class="container">
				<div class="row align-items-center">
				<div class="col-6 col-md-6">
					<p class="mb-0">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/phone.php"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/mail.php"
	),
	false
);?>
					</p>
				</div>
				<div class="col-6 col-md-6 text-right">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/rtop.php"
	),
	false
);?>
				</div>
				</div>
			</div>
		</div>
		
		<div class="site-navbar">
			<div class="container py-1">
				<div class="row align-items-center">
					<div class="col-8 col-md-8 col-lg-2">
						<h1 class=""><a href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>"><?
$APPLICATION->IncludeFile(
	SITE_DIR."include/company_name.php",
	Array(),
	Array("MODE"=>"html")
);
?></a></h1>
					</div>
					<div class="col-4 col-md-4 col-lg-10">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "top_multi", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "3",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
					</div>
				</div>
			</div>
		</div>
	</div>