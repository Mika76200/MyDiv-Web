
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="content-language"     content="FR-fr">
    <title>MyDiv.js - Push</title>
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
    <?php require $_SERVER['DOCUMENT_ROOT']."/MyDiv-web/push/push.css";?>
    </style>

  </head>
  <body style="">

    <div id ="header">
      <div class="bar_menu">
        <a class="anchor_bar_menu" href="/MyDiv-web/index.php">Home</a>
      </div>
    </div>

  <div id="separatordiv_form_register" style="height: 1px; width: 100%; background-color: rgb(158, 158, 158);display: flex;"></div>

  <div class="page">

    <div id="void_left" ></div>
    <div id='center_continer' class="center">
      <div id="content" >
        <h1 class="title">Push tchat MyDiv </h1>
        <h2 class="title">tchat</h2>
        <div class="tchat">
          <div class="user1" id="user1">
            <h3 class="title">user1</h3>
          </div>

          <div class="user2" id="user2">
            <h3 class="title">user2</h3>
          </div>
        </div>
      </div>
    </div>
    <div id="void_rigth"></div>

  </div>

  <hr id="separatordiv_form_register" >

  <div id="foot">
    <div id="foot_container">
      <a class="about" href="/MyDiv-web/donate/donate.php">Donate - </a>
      <a class="about" href="https://github.com/Mika76200/MyDiv.js">Github - </a>
      <a class="about" href="/MyDiv-web/about/about.php">About</a>
    </div>
  </div>
  </body>
  <footer>
  <script type="text/javascript" src="/MyDiv/MyDivDev.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/DataConversation.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/TchatManager.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/MyDivConversation.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/MyDivAddMessage.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/MyDivDeleteMessage.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/MyDivUserTchat.js"></script>
  <script type="text/javascript" src="/MyDiv-web/push/js/pushTchat.js"></script>
  </footer>

</html>
