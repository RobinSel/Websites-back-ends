<?php

  function __autoload($className) {
	  require_once('classes/' . $className . '.php');
	}

$htmlPage = new HTMLBuilder('html/header-partial.php', 'html/body-partial.php', 'html/footer-partial.php',
                            'css/global.css', 'js/script.js');

$headerName = $htmlPage->getHeaderName();
$bodyname = $htmlPage->getBodyName();
$footerName = $htmlPage->getFooterName();
$cssName = $htmlPage->getCssName();
$jsName = $htmlPage->getJsName();

require $htmlPage->getHeaderName();
if($htmlPage->getHeaderName()!= null) {include $bodyname;}
if($htmlPage->getHeaderName()!= null) {include $footerName;}
if($htmlPage->getHeaderName()!= null) {include $cssName;}
if($htmlPage->getHeaderName()!= null) {include $jsName;}



?>