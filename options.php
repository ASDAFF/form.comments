<?php
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();
defined('ADMIN_MODULE_NAME') or define('ADMIN_MODULE_NAME', 'form.comments');

use Bitrix\Main\Localization\Loc;

if (!$USER->isAdmin()) {
    $APPLICATION->authForm(Loc::getMessage('FORM_COMMENTS_OPTIONS_AUTH'));
}

Loc::loadMessages(__FILE__);

$tabControl = new CAdminTabControl("tabControl", array(
    array(
        "DIV" => "instructions",
        "TAB" => Loc::getMessage('FORM_COMMENTS_OPTIONS_TAB_NAME'),
        "TITLE" => Loc::getMessage('FORM_COMMENTS_OPTIONS_TAB_TITLE'),
    ),
));

$tabControl->begin();
    /*
     * TODO: добавить инструкциию по использованию модуля.
     * */
    $tabControl->beginNextTab();

    echo Loc::getMessage('FORM_COMMENTS_OPTIONS_TAB_TEXT');

$tabControl->end();
?>
