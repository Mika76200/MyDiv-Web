

class DataConversation
{
  static init()
  {
    this.conversation = null;
  }
  static setData(data)
  {
    this.init();
    if(data !== 0)
    {
      this.conversation = data['listMessage'];
    }
  }
  static getData()
  {
    return this.conversation;
  }
}
