



      // on recupere l'ElementDOMHtml ou placer la futur div ou autre element de MyDiv.js
        var elementDOMHtmlHeader = new MyElementDOMHtml();
            elementDOMHtmlHeader.CreateToDomElement('header',document.getElementById('header'),null)
        // creation d'un nouveau de la div
        var divBarMenu= new MyDivHeaderBarMenu();
        // affiche l'element
            elementDOMHtmlHeader.inserDiv(divBarMenu);
            elementDOMHtmlHeader.setFlex();




      //////////////////////////////////////////////////////////////////////////////////
      // on recupere l'ElementDOMHtml ou placer la futur div ou autre element de MyDiv.js
      var elementDOMHtmlFoot = new MyElementDOMHtml();
          elementDOMHtmlFoot.CreateToDomElement('foot',document.getElementById('foot'),null)
      // creation d'un nouveau de la div
      var divBarMenu= new MyDivFoot();
      // affiche l'element
          elementDOMHtmlFoot.inserDiv(divBarMenu);
          elementDOMHtmlFoot.setFlex();
