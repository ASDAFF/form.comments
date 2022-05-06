<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Config\Option;

require($_SERVER["DOCUMENT_ROOT"].Option::get("form_comments", "path")."/admin/form_comments_list.php");
?>
