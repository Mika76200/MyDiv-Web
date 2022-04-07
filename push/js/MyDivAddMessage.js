

class MyDivAddMessage extends MyInsideDivHorizontal
{
  constructor(iduser)
  {
    super("add_message_tchat_push");
    this.deleteMargin();
    this.user = iduser;
    this.inputText = new MyInputText('message',"new message");
    this.inputText.addEventKeyEnter(()=>{this.sendMessage()});

    this.divInput = new MyInputButtonAutoConfig('imput_bar',
                                                new TypeInput('MessageBar',"send"),
                                                ()=>{this.sendMessage()},null,this);
    this.inserDiv(this.inputText);
    this.inserDiv(this.divInput)

  }
  sendMessage()
  {
    TchatManager.sendMessage(
                              this.user,
                              MyRef.get(NAME_REF_DATA_CONVERSATIO+this.user).getIDLastMessage(),
                              this.inputText.getValue(),
                              ()=>
                              {
                                this.inputText.cleanValue()
                              });
  }
}
