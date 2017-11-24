<?php

  function __autoload($className) {
	  require_once('classes/' . $className . '.php');
	}

$htmlPage = new HTMLBuilder('html/header-partial.php', 'html/body-partial.php', 'html/footer-partial.php',
                            'css/global.css', 'js/script.js');

echo $htmlPage->getHeaderName();
echo $htmlPage->getBodyName();
echo $htmlPage->getFooterName();
echo $htmlPage->getCssName();
echo $htmlPage->getJsName();

if($htmlPage->getHeaderName()!= null) {include $headerName;}
if($htmlPage->getHeaderName()!= null) {include $bodyname;}
if($htmlPage->getHeaderName()!= null) {include $footerName;}
if($htmlPage->getHeaderName()!= null) {include $cssName;}
if($htmlPage->getHeaderName()!= null) {include $jsName;}



?>