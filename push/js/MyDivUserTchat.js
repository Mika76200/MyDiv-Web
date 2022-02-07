

class MyDivUserTchat extends MyDisplayDivVertical
{
  constructor(id,iduser)
  {
    super(id,parent);
    this.idUser= id;

    this.header = new MyHeaderDiv('id_'+id,id,6);
    this.divTchat = new MyDivConversation(iduser,this);
    this.divAddMessage = new MyDivAddMessage(iduser);

    this.inserDiv(this.header);
    this.inserSeparatorHorizontal();
    this.inserDiv(this.divTchat);
    this.inserSeparatorHorizontal();
    this.inserDiv(this.divAddMessage);

    this.setSizePourCent(100,100);
    this.setDisplay("flex");

    TchatManager.setMessage(this.idUser,(reponse)=>
    {
      this.divTchat.setConversation(reponse);
    });

  }
  sendRequestPush(idLastMessage)
  {
    TchatManager.sendRequestPush(this.idUser,idLastMessage,(reponse)=>
    {
      this.divTchat.addLastMessage(reponse);
    });
  }

}
