<?php
/**
 * @global $APPLICATION;
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use \Bitrix\Main\Page\Asset as Asset;
?>

		</main>

		<? $APPLICATION->IncludeFile('/includes/footer/footer.php') ?>

		<!-- WebPack Libraries and Teplate JS -->
		<?php
			Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/dist/project_name.libs.js');
			Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/dist/project_name.template.js');
		?>

		<!-- Custom JS -->
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/assets/js/custom.js');?>
	</body>
</html>