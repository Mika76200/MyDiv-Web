<?php

session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/includes/visitors/VisitorsManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/MyDiv-web/includes/language/NavigatorLanguage.php');
VisitorsManager::addUniqueVisitorsHome();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language"     content="FR-fr">
    <title>MyDiv.js - Home</title>
    <meta property="og:site_name"           content="mydiv.js.org"/>
    <meta name="viewport"                   content="width=device-width, user-scalable=no">
    <meta name="description"                content="">
    <meta name="keywords"                   content="">
    <link rel="stylesheet"                  href="/MyDiv-web/common/normalize.css" />
    <style>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/scrollbar.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/common.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/index.css";?>
    </style>

  </head>
  <body style="background: rgb(224, 224, 224) none repeat scroll 0% 0%;">

    <div id ="header">
      <div class="bar_menu">
        <a class="anchor_bar_menu" href="/MyDiv-web/index.php">Home</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/learn/learn.php">Learn</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/download/download.php">Download</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/development/development.php">Development</a>
      </div>
      <div class="mini_bar_menu">
        <select class="anchor_mini_bar_menu" name="">

          <option value="English">English</option>
          <option value="Français">Français</option>
        </select>
        <a class="anchor_mini_bar_menu" href="">Donate</a>
      </div>
    </div>

    <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158);display: flex;"></div>

    <div id="center" class="center">
      <div id="head" class="center">
        <h1 class="title">MyDiv.js</h1>
        <h2 class="title">MyDiv.js</h2>
      </div>
      <div class="description">
        <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeDescription.php"?>
      </div>
      <div id="separatordiv_form_register" style="height: 1px; width: 80%; background-color: rgb(158, 158, 158);   margin: auto auto auto auto; display: flex;"></div>
      <div class="mini_learn">
        <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeMiniLearn.php"?>
      </div>
      <div id="separatordiv_form_register" style="height: 1px; width: 80%; background-color: rgb(158, 158, 158);   margin: auto auto auto auto; display: flex;"></div>
      <div class="text_about">
        <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeAbout.php"?>
      </div>
    </div>

    <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158); display: flex;"></div>

    <div id="foot">
      <div id="foot_container">
        <a class="about" href="">Donate - </a>
        <a class="about" href="https://github.com/Mika76200/MyDiv.js">Github - </a>
        <a class="about" href="/MyDiv-web/index.php">About</a>
      </div>
    </div>
  </body>
  <footer>
    <script type="text/javascript" src="/MyDiv/MyDivDev.js"></script>
  </footer>
</html>
