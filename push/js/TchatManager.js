


class TchatManager
{
  static sendMessage(idUser,testMessage,CALLBACK)
  {
    var form = new FormData();
        form.append('id',idUser);
        form.append('message',testMessage);
        sendRequestForm(form,'/MyDiv-web/push/php/addMessagePush.php',CALLBACK);
  }
  static setMessage(idUser,CALLBACK)
  {
    var form = new FormData();
        form.append('id',idUser);
        sendResquetFormReponceJson(form,'/MyDiv-web/push/php/getConversation.php',CALLBACK);
  }
  static deleteMessage(idMessage,idUser,CALLBACK)
  {
    var form = new FormData();
        form.append('idMessage',idMessage);
        form.append('idUser',idUser);
        sendResquetFormReponceJson(form,'/MyDiv-web/push/php/deleteMessage.php',CALLBACK);
  }
}
