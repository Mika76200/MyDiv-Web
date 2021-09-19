



      // on recupere l'ElementDOMHtml ou placer la futur div ou autre element de MyDiv.js
        var elementDOMHtmlHeader = new MyElementDOMHtml();
            elementDOMHtmlHeader.CreateToDomElement('header',document.getElementById('header'),null)
        // creation d'un nouveau de la div
        var divBarMenu= new MyDivHeaderBarMenu();
        // affiche l'element
            elementDOMHtmlHeader.inserDiv(divBarMenu);
            elementDOMHtmlHeader.setFlex();


      // on recupere l'ElementDOMHtml ou placer la futur div ou autre element de MyDiv.js
        var elementDOMHtmlViod = new MyElementDOMHtml();
            elementDOMHtmlViod.CreateToDomElement('div_preview_MyDivViod',document.getElementById('div_preview_MyDivViod'),null)
        // creation d'un nouveau de la div
        var divViod = new MyDivViod();
        // affiche l'element
            elementDOMHtmlViod.inserDiv(divViod);
            elementDOMHtmlViod.setFlex();

        ////////////////////////////////////////////////////////////////////////////////////////////////////////
        // recuper l'ElementDOMHtml voulu
        var elementDOMHtmlFullElement = new MyElementDOMHtml()
            elementDOMHtmlFullElement.CreateToDomElement('div_preview_MyDivFullElement',document.getElementById('div_preview_MyDivFullElement'),null)

        // creation d'un nouveau element
        var divElement = new MyDivFullElement();

        // affiche l'element
            elementDOMHtmlFullElement.inserDiv(divElement);
            elementDOMHtmlFullElement.setFlex();
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////
      // recuper l'ElementDOMHtml voulu
      var elementDOMHtmlEvent = new MyElementDOMHtml()
          elementDOMHtmlEvent.CreateToDomElement('div_preview_MyDivEvent',document.getElementById('div_preview_MyDivEvent'),null)

      // creation d'un nouveau element
      var divEvent = new MyDivEvent();
      // affiche l'element
          elementDOMHtmlEvent.inserDiv(divEvent);
          elementDOMHtmlEvent.setFlex();

      // on recupere l'ElementDOMHtml ou placer la futur div ou autre element de MyDiv.js
      var elementDOMHtmlFoot = new MyElementDOMHtml();
          elementDOMHtmlFoot.CreateToDomElement('foot',document.getElementById('foot'),null)
      // creation d'un nouveau de la div
      var divBarMenu= new MyDivFoot();
      // affiche l'element
          elementDOMHtmlFoot.inserDiv(divBarMenu);
          elementDOMHtmlFoot.setFlex();
