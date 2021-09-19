

<?php

session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/includes/language/NavigatorLanguage.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language"     content="FR-fr">
    <title>MyDiv.js - Learn</title>
    <meta property="og:site_name"           content="mydiv.js.org"/>
    <meta name="viewport"                   content="width=device-width, user-scalable=no">
    <meta name="description"                content="">
    <meta name="keywords"                   content="">

    <link rel="apple-touch-icon" sizes="120x120" href="/MyDiv-web/dataweb/icon/icon.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/MyDiv-web/dataweb/icon/icon.png"/>
    <link rel="icon"                        href="/MyDiv-web/dataweb/icon/icon.png"/>

    <style>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/normalize.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/scrollbar.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/common.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/learn/learn.css";?>
    </style>

  </head>
  <body>

    <div id ="header">

    </div>

    <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158);display: flex;"></div>
    <div class="page">
      <div id="void_left" ></div>
      <div id'center_continer' class="center">
        <div id="intro">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/learnIntro.php"?>
        </div>
        <div id="learnA">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/learnA.php"?>
        </div>
        <div id="learnB">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/learnB.php"?>
        </div>
        <div id="learnC">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/learnC.php"?>
        </div>
        <div id="learnD">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/learnD.php"?>
        </div>

      </div>
      <div id="void_rigth"></div>
    </div>
    <hr id="separatordiv_form_register" >
    <div id="foot">

    </div>
  </body>
  <footer>
    <script type="text/javascript" src="/MyDiv/MyDivDev.js"></script>
    <script type="text/javascript" src="/MyDiv-web/js/common/MyDivHeaderBarMenu.js"></script>
    <script type="text/javascript" src="/MyDiv-web/js/common/MyDivFoot.js"></script>
    <script type="text/javascript" src="/MyDiv-web/learn/learn.js"></script>
  </footer>
</html>
