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

    <link rel="apple-touch-icon" sizes="120x120" href="/MyDiv-web/dataweb/icon/icon.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="/MyDiv-web/dataweb/icon/icon.png"/>
    <link rel="icon"                        href="/MyDiv-web/dataweb/icon/icon.png"/>

    <style>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/normalize.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/scrollbar.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/common/common.css";?>
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/index.css";?>
    </style>

  </head>
  <body style="">

    <div id ="header">
      <div class="bar_menu">
        <a class="anchor_bar_menu" href="/MyDiv-web/index.php">Home</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/learn/learn.php">Learn</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/download/download.php">Download</a>
        <a class="anchor_bar_menu" href="/MyDiv-web/development/development.php">Development</a>
        <a class="anchor_bar_menu" class="anchor_mini_bar_menu" href="/MyDiv-web/donate/donate.php">Donate</a>
      </div>
    </div>

    <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158);display: flex;"></div>


    <div class="page">

      <div id="void_left" ></div>
      <div id'center_continer' class="center">
        <div id="head" class="center">
          <h1 id='name_lib'class="title">MyDiv.js</h1>
          <h2 class="title">Simplicité, Facilité, Accessible</h2>
        </div>
        <div class="description" style ="margin: 5%;">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeDescription.php"?>
        </div>
        <hr id="separatordiv_form_register" style="background-color: rgb(158, 158, 158);   margin: auto auto auto auto; ">
        <div class="mini_learn" style ="margin: 5%;">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeMiniLearn.php"?>
        </div>
        <hr id="separatordiv_form_register">
        <div class="text_about" style ="margin: 5%;">
          <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/includes/language/".NavigatorLanguage::getLanguage()."/homeAbout.php"?>
        </div>
      </div>
      <div id="void_rigth"></div>

    </div>

    <hr id="separatordiv_form_register" >

    <div id="foot">
      <div id="foot_container">
        <a class="about" href="/MyDiv-web/donate/donate.php">Donate - </a>
        <a class="about" href="https://github.com/Mika76200/MyDiv.js">Github - </a>
        <a class="about" href="/MyDiv-web//about/about.php">About</a>
      </div>
    </div>
  </body>
  <footer>
    <script type="text/javascript" src="/MyDiv/MyDivDev.js"></script>
    <script type="text/javascript" src="/MyDiv-web/index.js"></script>
  </footer>
</html>
