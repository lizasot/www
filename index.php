<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
$src_path = "local/templates/home/";
global $filter_ads;
$filter_ads = array('!PROPERTY_IS_PRIORITY' => false);
/* //task170044
if (CModule::IncludeModule('iblock')) {
	$arFilter = Array("IBLOCK_ID" => $_GET['ads'], "!PROPERTY_HAVE_GARAGE" => false);
	$arSelect = Array("ID", "NAME", "IBLOCK_ID", "PROPERTY_PRICE", "PROPERTY_IS_PRIORITY");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		print_r($arFields);
		echo '<br>';
		echo '<br>';
		echo '<br>';
	}
}
*/
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d-m-Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "filter_ads",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>

<div class="py-5">
<div class="container">

  <div class="row">
<?$APPLICATION->IncludeComponent(
"bitrix:main.include", 
".default", 
array(
	"AREA_FILE_SHOW" => "file",
	"AREA_FILE_SUFFIX" => "inc",
	"EDIT_TEMPLATE" => "",
	"COMPONENT_TEMPLATE" => ".default",
	"PATH" => "/include/main/item1_top.php"
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
	"PATH" => "/include/main/item2_top.php"
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
	"PATH" => "/include/main/item3_top.php"
),
false
);?>

  </div>
</div>
</div>
<div class="site-section site-section-sm bg-light">
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"tiles_info", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "PROPERTY_PRICE",
			5 => "PROPERTY_AREA",
			6 => "PROPERTY_FLOORS_CNT",
			7 => "PROPERTY_TOILETS_CNT",
			8 => "PROPERTY_HAVE_GARAGE",
			9 => "",
		),
		"IBLOCKS" => array(
			0 => "9",
		),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "tiles_info"
	),
	false
);?>
</div>

<div class="site-section">
<?$APPLICATION->IncludeComponent("bitrix:news.line", "tiles_services", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "PROPERTY_LINK",
			3 => "PROPERTY_ICON_ID",
			4 => "",
		),
		"IBLOCKS" => array(	// Код информационного блока
			0 => "10",
		),
		"IBLOCK_TYPE" => "services",	// Тип информационного блока
		"NEWS_COUNT" => "6",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"COMPONENT_TEMPLATE" => "tiles_info"
	),
	false
);?>
</div>

<div class="site-section bg-light">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"tiles_blogs", 
	array(
		"ACTIVE_DATE_FORMAT" => "j M Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "tiles_blogs"
	),
	false
);?>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>