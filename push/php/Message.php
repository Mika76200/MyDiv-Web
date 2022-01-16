<?php
/**
 *
 */
class Message
{
  private $message = array('idUser','textMessage',"date");

  function __construct(string $data)
  {
    if(!empty($data))
    {
      $m = preg_split("/[|]+/",$data);
      $this->message['idUser'] = (int) $m[0];
      $this->message['textMessage'] = (string) $m[1];
      $this->message['date'] = $m[2];
    }
  }
  function getMessage():array
  {
    return $this->message;
  }
}
?>
