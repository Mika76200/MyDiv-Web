<?php
/**
 *
 */
class Message
{
  private $message = array('idMessage','idUser','textMessage',"date");

  function __construct(string $data)
  {
    if(!empty($data))
    {
      $m = preg_split("/[|]+/",$data);
      $this->message['idMessage'] = (int) $m[0];
      $this->message['idUser'] = (int) $m[1];
      $this->message['textMessage'] = (string) $m[2];
      $this->message['date'] = $m[3];
    }
  }
  function getMessage():array
  {
    return $this->message;
  }
}
?>
