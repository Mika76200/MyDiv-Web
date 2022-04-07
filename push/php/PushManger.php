<?php



/**
 *
 */
class PushManger extends MyPushManager
{

  function getAllPush()
  {
    if(!self::$listPush)
    {
      self::init();
    }
    if($data = self::getPushAllMessager())
    {
      self::$listPush->addListToListPush($data,'listMessage');
    }
    if(self::$listPush->isViod())
    {
      return NOREPONSE;
    }
    return self::$listPush->getData();
  }
  function getPushAllMessager()
  {
    return ConversationManager::sendListLastMessage();
  }
}




 ?>
