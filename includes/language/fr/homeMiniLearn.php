<!DOCTYPE html>
<html>
  <div id="mini_learn_container">
    <div id="mini_learn_text_container" style="margin-left: 10px;text-align: justify;">
      <h3>Facilité</h3>
      <p style="margin: 10px 0;padding: 5px;width: 50%">
          Il est simple d'utiliser My Div js,
          importer la librairie et en quelque ligne de code,
          vous êtes déjà en capacité d'afficher un élément graphique</p>
          <div class="code" style='overflow: auto;display:none'>

<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>head<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>title<span style="color:mediumblue">&gt;</span></span>Page Title<span style="color:brown"><span style="color:mediumblue">&lt;</span>/title<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/head<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br>
<br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>div id='my_div'<span style="color:mediumblue">&gt;</span></span><span style="color:brown"><span style="color:mediumblue">&lt;</span>/div<span style="color:mediumblue">&gt;
</span></span><br>
<br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>script<span style="color:mediumblue">&gt;</span></span><br>
<br>

//recuper l'ElementDOMHtml voulu <br>
var elementDOMHtml = new MyDiv(); <br>
    elementDOMHtml.CreateToDomElement('preview_MyDiv.js',document.getElementById('preview_MyDiv.js'),null); <br>
<br>
//creation d'un nouveau element<br>
var divPreview = new MyDisplayDivVertical("MyDiv.js");<br>
    divPreview.setSize(400,400);<br>
    divPreview.inserElement(new MySpam('newSpam', 'Lorem ipsum dolor sit amet'));<br>
<br>
//affiche l'element<br>
    elementDOMHtml.inserDiv(divPreview);<br>
    elementDOMHtml.setFlex();<br>
<br>
<br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/script<span style="color:mediumblue">&gt;</span></span><br>
<br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span>

          </div>
          <br>
          <a class='more_left' href="/MyDiv-web/learn/learn.php">Plus d'infos</a>
    </div>
    <div id="mini_learn_img_container">
        <img src="/MyDiv-web/dataweb/image/exemple.png" alt="erxemple coding">
    </div>
  </div>
</html>
