<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/Message.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListMessageConversation.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListLastMessage.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyDivListDebug.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/common/file.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ConversationManager.php');

//stat session
session_start();


if($_POST)
{
  if($data = json_encode(ConversationManager::sendlastMessage()))
  {
    exit($data);
  }
  exit(MyDivListDebug::exitError("errorInRequest"));
}
else
{
  exit(MyDivListDebug::exitError("errorConnect"));
}
?>
