
// recuper l'ElementDOMHtml voulu
var elementDOMHtml = new MyDiv()
    elementDOMHtml.CreateToDomElement('preview_MyDiv.js',document.getElementById('preview_MyDiv.js'),null)

// creation d'un nouveau element
var divPreview = new MyDisplayDivVertical("MyDiv.js");
    divPreview.setSize(400,400);

    var divHeader = new MyHeader('header_div','MyDiv',4,parent);
        divHeader.setBackGroundColor(BackGroundDivHeaderOverlay.getColor());

    var content = new MyInsideDivVertical('newInside',divPreview);
        content.setDefaultMargin(10);
        content.setSizePourCent(80,100);

        var divform = new MyInsideDivVertical('div_form',content);


          var inputFakeuser = new MyInputLabel('fake_user','text','username :',' user');
          var inputFakemail = new MyInputLabel('fake_email','email','email :',' ');
          var inputPassword = new MyInputLabel('fake_passwors','password','password :','****');
          var inputNumber = new MyInputLabel('fake_number','number','number :','10');
          var inputSearch = new MyInputLabel('fake_search','search','search :',' ');
          var inputcheckBox = new MyInputLabel('fake_checkbox','checkBox','checkbox :',true);
          var inputRanger = new MyInputLabel('fake_ranger','ranger',50,'','ranger :');

          divform.inserElement(inputFakeuser);
          divform.inserElement(inputFakemail);
          divform.inserElement(inputPassword);
          divform.inserElement(inputNumber);
          divform.inserElement(inputSearch);
          divform.inserElement(inputcheckBox);
          divform.inserElement(inputRanger);

        var image = new MyImage('newImage',"/MyDiv-web/dataweb/image/valid.png",content);
        var paragraphe = new Paragraphe("newsPara",'the Best Library');

        content.inserElement(divform);
        content.inserElement(paragraphe);

    var inputButtonBar = new MyInputButtonDialBar('input_bar_MyDiv.js','ok',()=>{},divPreview);

    divPreview.inserElement(divHeader);
    divPreview.inserSeparatorHorizontal();
    divPreview.inserElement(content);
    divPreview.inserSeparatorHorizontal();
    divPreview.inserElement(inputButtonBar);

// affiche l'element
    elementDOMHtml.inserDiv(divPreview);
    elementDOMHtml.setFlex();
