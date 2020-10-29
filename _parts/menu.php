<?php

$arMenu = array(
	array(
		"NAME" => "Максим.Ru",
		"URL" => "/",
	),
	array(
		"NAME" => "Массаж",
		"URL" => "/massage/",
	),
	array(
		"NAME" => "Отзывы",
		"URL" => "/reviews/",
	),
	array(
		"NAME" => "Контакты",
		"URL" => "/contacts/",
	),
	
);
?>

<ul class="top-menu clearfix">
	<? foreach($arMenu as $arItem): ?>
		<a href="<?= $arItem['URL'] ?>"><li class="block top-menu-item <? if($arItem['URL'] === $_SERVER['REQUEST_URI']): ?>actived<? endif; ?>"><?= $arItem['NAME'] ?></li></a>
	<? endforeach; ?>
</ul>

<?
/*
<li class="block top-menu-item<? if($arItem['URL'] === $_SERVER['REQUEST_URI']): ?> actived<? endif; ?>"><a href="<?= $arItem['URL'] ?>"><?= $arItem['NAME'] ?></a></li>
*/
?>