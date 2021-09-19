
<div id="learn_A_container">
  <h3>Ma première Div</h3>
  <p class="paragraphe">
    Pour ouvrir une première Div il nous faudra un minimum de code HTML,<br>
    pour l'exemple voici une base d'HTML :
    <br>
    <pre class="code">
      <br>
      < !DOCTYPE html ><br>
      < html ><br>
        < head ><br>
          < meta charset="utf-8 "><br>
          < title > My Frist Div< /title ><br>
        < /head ><br>
        < body ><br>
          < div id="frist_div"><br>
            <br>
          < /div ><br>
        < /body ><br>
      < /html ><br>
      <br>
    </pre>
  </p>
  <p class='paragraphe'>
    un élément DOM HTML '<span><</span>div<span>></span>' avec un id "frist_div" a été ajouter qui servira à indiquer ou la futur Div sera placée.<br>
    Maintenant on va voir le minimum de code en Javascript néssaire. <br>
    N'oubliez pas d'ajouter le ficher MyDivViod.js à votre projet qui se trouve <a href="/MyDiv-web/learn/MyDivViod.js" download="/MyDiv-web/learn/MyDivViod.js">ici</a>.
    <pre class="code">
      <br>
      // on récupère l'ElementDOMHtml ou placer la future div ou autres element de MyDiv.js <br>
      var elementDOMHtml = new MyElementDOMHtml()<br>
          elementDOMHtml.CreateToDomElement('preview_MyDiv.js',document.getElementById('preview_MyDiv.js'),null)<br>
      <br>
      // Création d'un nouveau de la div   <br>
      var divPreview = new MyDivViod(); <br>
      <br>
      // Affiche l'élément.<br>
          elementDOMHtml.inserDiv(divPreview); <br>
          elementDOMHtml.setFlex(); <br>
          <br>
    </pre>
    <br>
    Ce qui donne : <br>
  </p>
  <div id="div_preview_MyDivViod" class="preview_tuto">

  </div>
</div>
