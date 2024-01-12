<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<!-- Шаблон детальной -->
<div class="article-card">
    <!-- Название новости -->
    <div class="article-card__title">
        <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]) : ?>
            <?= $arResult["NAME"] ?>
        <? endif; ?>
    </div>
    <!-- Дата публикации -->
    <div class="article-card__date">
        <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]) : ?>
            <span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
        <? endif; ?>
    </div>
    <!-- Тело новости -->
    <div class="article-card__content">
        <!-- Изображение -->
        <div class="article-card__image sticky">
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
                <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" />
            <? endif ?>
        </div>
        <!-- Текст -->
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3">
                <p><? echo $arResult["DETAIL_TEXT"]; ?></p>
            </div>
            <!-- Возврат -->
            <p><a class="article-card__button" href="<?= $arResult["LIST_PAGE_URL"] ?>"><?= GetMessage("T_NEWS_DETAIL_BACK") ?></a></p>
        </div>
    </div>
</div>