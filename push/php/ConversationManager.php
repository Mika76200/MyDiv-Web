<?php


/**
 *
 */
class ConversationManager
{
  static $maxMessage = 50;
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
  static function sendCoversation():array
  {
    $conversation = new ListMessageConversation(File::readFileConvers());
    return $conversation->getConversation();
  }
  static function addMessage():bool
  {
    return File::writeFileConvers($_POST['id'],$_POST['message']);
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
