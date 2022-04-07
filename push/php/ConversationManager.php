<?php


/**
 *
 */
class ConversationManager
{
  static $maxMessage = 50;
  static $timeout = 30;
  static function readConversation():bool
  {
    /*
    * ajoute un message et vérifie que
    * il y a pas plus de 50 message par user
    * pour evité de remplir le disque pour rien
    * alors on vide le fichier .convers
    */
    if(self::isLimitMaxMessage() or self::isExprired())
    {
      File::cleanConversation();
    }
  }
  static function getConversation()
  {
    return  new ListMessageConversation(File::readFileConvers());
  }
  static function sendCoversation():array
  {
    $convers = self::getConversation();
    return $convers->getConversation();
  }
  static function sendListLastMessage()
  {
    // initialise
    $list = new MyListPush(0);
    $convers = self::getConversation();
    /// tchat 1
    if($_POST['idMessageUser1'] != $convers->getIDLastMessage())
    {
      self::addNewMessageToListPush($list,$_POST['idMessageUser1']);
    }
    // tchat 2
    if($_POST['idMessageUser2'] != $convers->getIDLastMessage())
    {
      self::addNewMessageToListPush($list,$_POST['idMessageUser2']);
    }
    if($list->isViod())
    {
      return null;
    }
    return $list;
  }
  static function addNewMessageToListPush(MyListPush $l,int $keys)
  {
    $convers = self::getConversation();
    $m = new MyMessagePush($convers->getMessage($keys+1));
    $l->addToList($m);
  }
  static function addMessage():bool
  {
    $newID = $_POST['idLastMessage'] +1;
    return File::writeFileConvers($newID,$_POST['id'],$_POST['message']);
  }
  static function isLimitMaxMessage():bool
  {
    if(File::getCountLine() > self::$maxMessage)
    {
      return true;
    }
    return false;
  }
  static function isExprired():bool
  {
    return false;
  }
}







 ?>
