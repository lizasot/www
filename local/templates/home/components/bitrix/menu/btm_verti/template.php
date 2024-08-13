<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="col-md-12">
	<h3 class="footer-heading mb-4"><?=GetMessage("MENU_TITLE")?></h3>
</div>
<div class="col-md-6 col-lg-6">
	<ul class="list-unstyled">
<?
$itemInBlockCnt = 0;
$half = ceil(count($arResult)/2);
foreach($arResult as $arItem):?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

		<? $itemInBlockCnt++;
		if ($itemInBlockCnt == $half):?>
	</ul>
</div>
<div class="col-md-6 col-lg-6">
	<ul class="list-unstyled">
		<? $itemInBlockCnt = 0;
		endif?>
<?endforeach?>
	</ul>
</div>
<?endif?>