<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyDivListDebug.php');
// push
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/EnumReponsePush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/EnumTypeListPush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyListPush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyListAllPush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyPush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyMessagePush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyPushManager.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/common/file.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/Message.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListMessageConversation.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListLastMessage.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ConversationManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/PushManger.php');


//stat session
session_start();


if($_POST)
{
  // Fixe le temps maximum d'exécution d'un script
  set_time_limit(0);
  // Active l'interruption de script sur déconnexion du visiteur
  ignore_user_abort(false);

  $startTime = time() ;
  $endTime = $startTime + 10;
  //bouche infini avec des pause de 2"
  // tznt que les 28s ne sont pas écoulé

  while(time() < $endTime)
  {
    if(!$data = PushManger::getAllPush())
    {
      exit(MyDivListDebug::exitError("errorInRequest"));
      //break;
    }
    else
    {
      exit(json_encode($data));
    }
  }
  exit(json_encode($data));
}
else
{
  exit(MyDivListDebug::exitError("errorConnect"));
}
?>
