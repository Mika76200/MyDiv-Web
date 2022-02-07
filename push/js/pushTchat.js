

      user1Div = new MyElementDOMHtml();
      user1Div.CreateToDomElement('user1',document.getElementById('user1',null));

      tchat1 = new MyDivUserTchat('tchat_1',1);
      user1Div.inserDiv(tchat1);

      user2Div = new MyElementDOMHtml();
      user2Div.CreateToDomElement('user2',document.getElementById('user2',null));

      tchat2 = new MyDivUserTchat('tchat_2',2);
      user2Div.inserDiv(tchat2);

      ///// push quand tout estpret
      tchat1.sendRequestPush();
      //tchat2.sendRequestPush();
