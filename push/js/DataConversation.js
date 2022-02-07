

class DataConversation
{
  constructor()
  {
    this.convers = null;
  }
  setConversation(data)
  {

    this.convers = data
  }
  forEach(CALLBACK)
  {
    this.convers.forEach(CALLBACK);
  }
  getData()
  {
    return this.convers;
  }
}
