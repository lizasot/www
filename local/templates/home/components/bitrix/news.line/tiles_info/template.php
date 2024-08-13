<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<div class="container">
	<div class="row mb-5">
		<div class="col-12">
			<div class="site-section-title">
			<h2><?=GetMessage('TITLE_PROP')?></h2>
			</div>
		</div>
	</div>
	<div class="row mb-5">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
				<figure>
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
				</figure>
				<div class="prop-text">
					<div class="inner">
						<?if(!empty($arItem["PROPERTY_PRICE_VALUE"])):?>
						<span class="price rounded"><?=$arItem["PROPERTY_PRICE_VALUE"]?></span>
						<?endif;?>
						<h3 class="title"><?echo $arItem["NAME"]?></h3>
						<p class="location"><?=$arItem["PREVIEW_TEXT"]?></p>
					</div>
					<div class="prop-more-info">
					<div class="inner d-flex">
						<?if(!empty($arItem["PROPERTY_AREA_VALUE"])):?>
						<div class="col">
							<span><?=GetMessage('AREA')?>:</span>
							<strong><?=$arItem["PROPERTY_AREA_VALUE"]?><?=GetMessage('M')?><sup>2</sup></strong>
						</div>
						<?endif;?>
						<?if(!empty($arItem["PROPERTY_FLOORS_CNT_VALUE"])):?>
						<div class="col">
							<span><?=GetMessage('FLOORS')?>:</span>
							<strong><?=$arItem["PROPERTY_FLOORS_CNT_VALUE"]?></strong>
						</div>
						<?endif;?>
						<?if(!empty($arItem["PROPERTY_TOILETS_CNT_VALUE"])):?>
						<div class="col">
							<span><?=GetMessage('BATH')?>:</span>
							<strong><?=$arItem["PROPERTY_TOILETS_CNT_VALUE"]?></strong>
						</div>
						<?endif;?>
						<div class="col">
							<span><?=GetMessage('GARAGE')?>:</span>
							<strong>
								<?if(empty($arItem["PROPERTY_HAVE_GARAGE_VALUE"])):
									echo GetMessage('NONE');
								else:
									echo $arItem["PROPERTY_HAVE_GARAGE_VALUE"];
								endif;?>
							</strong>
						</div>
					</div>
					</div>
				</div>
			</a>
		</div>
	<?endforeach;?>
	</div>
</div>
