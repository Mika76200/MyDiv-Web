
class MyDivMessage extends MyInsideDivVertical
{
  constructor(message,idUserTchat,p)
  {
    super("inside_message",p);
    this.setSizePourCent(100);
    this.msg = message;
    this.idUser = message['idUser'];

    if(idUserTchat != this.idUser)
    {
      var justify = 'flex-start';
    }
    else
    {
      var justify = 'flex-end';
    }

    this.userfirstName = new MySpam("name_user","user "+this.idUser);
    this.userfirstName.setSizeText(10);

    this.divMsg = new MyDisplayDivHorizontal('div_message',this);

      this.option = new MyDivOption("conversation_option",false,true,true,this);
      this.option.deleteMargin();
      this.option.setMargin(5);
      this.option.hile();
      this.setOption(idUserTchat,this.idUser);

    this.divMsg.inserElement(this.option);

    this.messageText = new Paragraphe('message',this.msg['textMessage']);
    this.messageText.setSizeText(12);

    this.divMsg.inserElement(this.messageText);

    this.date = new MySpam("",this.msg['date'])
    this.date.setSizeText(8);
    this.date.setMargin(undefined,10,undefined,undefined);

    this.inserElement(this.userfirstName,justify);
    this.inserElement(this.divMsg,justify);
    this.inserElement(this.date,justify);

  }
  setOption()
  {
    if(this.idUser === this.idUser)
    {
        this.addEventListener("mouseover",()=>{this.option.show();setTimeout(()=>{this.option.hile();},5000);})
        this.option.addOption(new MyOptionSelectOption(AutoLanguageMyDiv.delete,() =>
        {

          TchatManager.deleteMessage(this.msg['idMessage'],this.idUser,(reponse)=>
          {
              if(parseInt(reponse) != 0)
              {
                  this.message.setText(AutoLanguageMyDiv.deleted);
                  this.deleteOption();

              }
              else
              {
                  this.spamErrors.setValue(' bug delete');
              }
          });
        }));
    }
  }
  deleteOption()
  {
    this.removeEventListener("mouseover",()=>{this.option.show();setTimeout(()=>{this.option.hile();},5000);})
    this.option.hile();
  }
}
class MyDivConversation extends MyInsideDivVertical
{
  constructor(id,p)
  {
    super("inside_"+id,p);
    this.deleteMargin();
    this.setOverFlowY();
    this.idUserTchat = id;
    this.setSize(400);
    this.setSizePourCent(undefined,100);
  }
  addMessage(message)
  {
    this.inserDiv(new MyDivMessage(message,this.idUserTchat));
  }
  setConversation()
  {
    var listMessage = DataConversation.getData();

    listMessage.forEach((item)=>{
        this.addMessage(item);
    });

  }
}
