<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая страница");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"COMPONENT_TEMPLATE" => "auth",
		"REGISTER_URL" => "/user/registration.php",
		"FORGOT_PASSWORD_URL" => "/user",
		"PROFILE_URL" => "/user/profile.php",
		"SHOW_ERRORS" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>