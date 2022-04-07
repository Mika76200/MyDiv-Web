

class DataConversation
{

  construct(data)
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
  addNewMessage(m)
  {
    this.convers.push(m)
  }
  getData()
  {
    return this.convers;
  }
  getMessage(k)
  {
    return this.convers[k]
  }
  getLastMessage()
  {
    return this.getMessage(this.convers.length-1);
  }
  getIDLastMessage()
  {
    return this.convers[this.convers.length-1]["idMessage"];
  }

}
