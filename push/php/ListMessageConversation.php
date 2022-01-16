<?php

/**
 *
 */
class ListMessageConversation
{
  protected $listMessage = array('listMessage'=> array());

  function __construct(array $data)
  {
    $this->setMessge($data);
  }
  function setMessge(array $data)
  {
    foreach ($data as $key => $value)
    {
      $m = new Message($value);
      array_push($this->listMessage['listMessage'],$m->getMessage());
    }
  }
  function getConversation():array
  {
    return $this->listMessage;
  }
}
?>
