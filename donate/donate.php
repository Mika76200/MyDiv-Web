
<?php

session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/includes/language/NavigatorLanguage.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language"     content="FR-fr">
    <title>MyDiv.js - Donate</title>
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
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/donate/donate.css";?>
    </style>

  </head>
  <body style="">

    <div id ="header">

    </div>

    <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158);display: flex;"></div>
    <div class="page">
      <div id="void_left" ></div>
      <div id'center_continer' class="center">
        <div id="donate">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/donate.php"?>
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
    <script type="text/javascript" src="/MyDiv-web/donate/donate.js"></script>
  </footer>
</html>
