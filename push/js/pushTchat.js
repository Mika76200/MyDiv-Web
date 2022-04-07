


      user1Div = new MyElementDOMHtml();
      user1Div.CreateToDomElement('user1',document.getElementById('user1',null));

      tchat1 = new MyDivUserTchat('tchat_1',1);
      user1Div.inserDiv(tchat1);

      user2Div = new MyElementDOMHtml();
      user2Div.CreateToDomElement('user2',document.getElementById('user2',null));

      tchat2 = new MyDivUserTchat('tchat_2',2);
      user2Div.inserDiv(tchat2);

      ///// push quand tout est pret


      
      function workPush()
      {
        sleep();
      }
      function sleep()
      {
          setTimeout(pushMessage, NORMAL_DELAY_PUSH);
      }
      function pushMessage()
      {
        var dataLastIdObject = new Array ('idMessageUser1','idMessageUser2');

        dataLastIdObject['idMessageUser1'] = tchat1.getIDLastMessage();
        dataLastIdObject['idMessageUser2'] = tchat2.getIDLastMessage();
        PushManager.sendRequestPush(dataLastIdObject,(reponse)=>
        {
          if(reponse != 1)
          {
            reponse['listMessage'].forEach((item, i) =>
            {
              tchat1.addNewMessage(item);
              tchat2.addNewMessage(item);
            });
          }

        });
        workPush();
      }

      pushMessage();
