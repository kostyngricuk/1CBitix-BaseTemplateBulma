<?
/**
 * @global $APPLICATION;
 * @var $arTemplateParams - included from .settings.php
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use \Bitrix\Main\Page\Asset as Asset;

include $_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/.settings.php";
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
        <!-- WebPack Libraries and Template CSS -->
		<?php
			Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/dist/baseTemplate.libs.css' );
			Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/dist/baseTemplate.template.css' );
		?>

        <!-- Custom CSS -->
        <?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/assets/css/custom.css' );?>

		<?$APPLICATION->ShowHead();?>

		<title><?$APPLICATION->ShowTitle()?></title>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<? $APPLICATION->IncludeFile('/includes/header/header.php') ?>
		<main>