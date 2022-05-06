<?if(!check_bitrix_sessid()) return;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

echo CAdminMessage::ShowNote(Loc::getMessage('FORM_COMMENTS_INSTALL_UNSTEP_MESSAGE'));
?>