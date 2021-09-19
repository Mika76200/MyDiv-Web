
<div id="learn_D_container">
  <h3>Des événements </h3>

  <p class="paragraphe">
    Pour ajouter des événements à nos éléments qui peuvent recevoir des events,<br>
    par exemple le bouton, il suffit de lui ajouter un callback.<br>
    comme ceci :
  </p>
  <pre class="code">

    soit directement en générant la class
    this.inputButtonBar = new MyInputButtonDialBar('input_bar_MyDiv.js','ok',()=>{alert('ok');},this);

    ou bien avec la fonction addEventListener(eventTags, funct);
    this.inputBarButtonBar.addEventListener('click',()=>{alert('ok');});

  </pre>
  <p class="paragraphe">
    ce qui donne :
  </p>
  <div id='div_preview_MyDivEvent' class="preview_tuto">

  </div>
  <p class="paragraphe">
    D'autres tutos viendront par la suite.
  </p>

</div>
