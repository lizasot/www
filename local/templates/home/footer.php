<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="mb-5">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/about_btm.php"
	),
	false
);?>
						</div>
					</div>
					<div class="col-lg-4 mb-5 mb-lg-0">
						<div class="row mb-5">
							<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"btm_verti", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "btm_verti",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
						</div>
					</div>
					<div class="col-lg-4 mb-5 mb-lg-0">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/follow.php"
	),
	false
);?>
					</div>
				</div>
				<div class="row pt-5 mt-5 text-center">
					<div class="col-md-12">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/copyright.php"
	),
	false
);?>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/popper.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/mediaelement-and-player.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.stellar.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-datepicker.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/aos.js"></script>

	<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

</body>

</html>