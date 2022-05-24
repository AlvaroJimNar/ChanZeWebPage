<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'includes/header.php'?>
  <meta charset="UTF-8">

  <title>ChanZe</title>

  <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/cajaunica.css" />

<body translate="no" onload="show()" class="contLOL">

  <div class="loot-container">
    <div class="contenedor-ruleta">
    <div id=unbox-area>

      <div id=cardList>
        <div class="arrow-down"></div>
      </div>

    </div>
    <button onclick="openCase();">Open</button>
    <div id=dialog>
      <div id=dialog-msg></div>
    </div>
  </div>
  </div>
</body>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>

<script type="text/javascript" src='js/lootGI.js'></script>