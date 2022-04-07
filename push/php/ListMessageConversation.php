<?php

/**
 *
 */
class ListMessageConversation
{
  protected $list = array('listMessage'=> array());

  function __construct(array $data)
  {
    $this->setMessge($data);
  }
  function setMessge(array $data)
  {
    foreach ($data as $key => $value)
    {
      $m = new Message($value);
      array_push($this->list['listMessage'],$m->getMessage());
    }
  }
  function getIDLastMessage():int
  {
    return $this->list['listMessage'][count($this->list['listMessage'])-1]['idMessage'];
  }
  function getMessage(int $id): array
  {
    foreach ($this->list['listMessage'] as $key => $value)
    {
      if($value['idMessage'] == $id)
      {
        return $value;
      }
    }
  }
  function getConversation():array
  {
    return $this->list;
  }
}
?>
