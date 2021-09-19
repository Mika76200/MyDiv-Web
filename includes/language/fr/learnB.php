
<div id="learn_B_container">
  <h3>Ajoutons des éléments</h3>
  <p class="paragraphe">
    Maintenant nous allons ouvrir le fichier de la class MyDivViod, <br>
    qui se trouve <a href="/MyDiv-web/learn/MyDivViod.js" download="/MyDiv-web/learn/MyDivViod.js">ici</a>, <br>
    pour y ajouter le linge suivant pour y metre en plus ces elements.
  </p>
    <pre class="code">
      <br>
              /// ajout d'un formulaire
              this.divform = new MyForm('div_form',content);
              <br>
                // instance de plusieurs éléments input texte, mail, password etc.
                this.inputFakeuser = new MyInputLabel('fake_user','text','username :',' user');
                this.inputFakemail = new MyInputLabel('fake_email','email','email :',' ');
                this.inputPassword = new MyInputLabel('fake_passwors','password','password :','****');
                this.inputNumber = new MyInputLabel('fake_number','number','number :','10');
                this.inputSearch = new MyInputLabel('fake_search','search','search :',' ');<
                this.inputcheckBox = new MyInputLabel('fake_checkbox','checkBox','checkbox :',true);
                this.inputRanger = new MyInputLabel('fake_ranger','ranger',50,'','ranger :');
              <br>
              // ajout des éléments au formulaire
              this.divform.inserElement(this.inputFakeuser);
              this.divform.inserElement(this.inputFakemail);
              this.divform.inserElement(this.inputPassword);
              this.divform.inserElement(this.inputNumber);
              this.divform.inserElement(this.inputSearch);
              this.divform.inserElement(this.inputcheckBox);
              this.divform.inserElement(this.inputRanger);
              <br>
              // instance une image et un paragraphe
              this.image = new MyImage('newImage',"/MyDiv-web/dataweb/image/valid.png",this.content);
              this.paragraphe = new Paragraphe("newsPara",'the Best Library');
              <br>
          // ajout des éléments form et paragraphe à div content
          this.content.inserElement(this.divform);
          this.content.inserElement(this.paragraphe);
          <br>
    </pre>
    <p class="paragraphe">
    Ce qui donne : <br>
    </p>
    <div id="div_preview_MyDivFullElement" class="preview_tuto">

    </div>
</div>
