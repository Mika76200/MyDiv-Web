<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/Message.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListMessageConversation.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ListLastMessage.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv/network/php/MyDivListDebug.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/common/file.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/EnumReponsePush.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/push/php/ConversationManager.php');

//stat session
session_start();


if($_POST)
{
  $startTime = time() ;
  $endTime = $startTime + 28;
  //bouche infini avec des pause de 2"
  while($startTime < $endTime)
  {
    if($data = ConversationManager::sendListLastMessage())
    {
      if($data['reponse'] == NOREPONSE)
      {
        // si est null
        // dors 2 seconde
        time_nanosleep(2, 100000);
        // et on recommence
        continue;
      }
      else
      {
        exit(json_encode($data));
      }
    }
    exit(MyDivListDebug::exitError("errorInRequest"));
  }
  exit(json_encode(array('rep,onse' =>TIMEOUT)));
}
else
{
  exit(MyDivListDebug::exitError("errorConnect"));
}
?>
