<?
global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "3",
		"DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"IS_SEF" => "N",
		"SECTION_PAGE_URL" => "#SECTION_ID#/",
		"SEF_BASE_URL" => "/catalog/phone/",
		"ID" => $_REQUEST["ID"],
		"SECTION_URL" => ""
	),
	false
);
$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>

