<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once 'includes/header.php'?>
  <meta charset="UTF-8">

  <title>ChanZe</title>

  <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/cajaunica.css" />

<body translate="no" onload="show()">

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
  <section class="contentRow">
    <div class="contentBox1">
      <form name="form" action="lootLOL.php" method="post">
        <input class="botoncito" type="hidden" name="submit" id="1" value="1">
        <button class="buttoncito">
          <img class="houseOne" src="img/Infinity.png" alt="Property Image" width="390" height="250">
      </form>
    </div>

    <div class="contentBox2">
      <form name="form" action="lootPKM.php" method="post">
        <input class="botoncito" type="hidden" name="submit" id="1" value="1">
        <button class="buttoncito">
          <img class="houseOne" src="img/Rocket.png" alt="Property Image" width="390" height="250">
      </form>
    </div>
    <div class="contentBox3">
      <form name="form" action="lootgenshin.php" method="post">
        <input class="botoncito" type="hidden" name="submit" id="1" value="1">
        <button class="buttoncito">
          <img class="houseOne" src="img/Luxury.png" alt="Property Image" width="390" height="250">
      </form>
    </div>

  </section>

</body>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>

<script type="text/javascript" src='js/lootGI.js'></script>