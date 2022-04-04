<?php include_once 'includes/header.php'?>
<link rel="stylesheet" href="css/boxes.css">
<link rel="stylesheet" href="css/boxes2.css">
<body>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src='https://ezy.com/cases/Luxury.png' style="width:100%">
    <div class="text">Luxury</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="https://ezy.com/cases/Infinity.png" style="width:100%">
    <div class="text">Infinity</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="https://ezy.com/cases/Cyberstealth.png" style="width:100%">
    <div class="text">Cyber Stealth</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>




<section class="contentRow">
            <div class="contentBox1">
                <form name="form" action="loot.php" method="post">
                <input class="botoncito" type="hidden" name="submit" id="1" value="1">
                <button class= "buttoncito" >
                <img class="houseOne" src="img/LoL.png" alt="Property Image" width="390" height="250">
                </form>
            </div>
            
            <div class="contentBox2">
            <form name="form" action="loot.php" method="post">
                <input class="botoncito" type="hidden" name="submit" id="1" value="1">
                <button class= "buttoncito" >
                <img class="houseOne" src="img/pokemon.png" alt="Property Image" width="390" height="250">
                </form>
            </div>
            <div class="contentBox3">
            <form name="form" action="loot.php" method="post">
                <input class="botoncito" type="hidden" name="submit" id="1" value="1">
                <button class= "buttoncito" >
                <img class="houseOne" src="img/genshin.png" alt="Property Image" width="390" height="250">
                </form>
            </div>
           
</section>
</body>

<script src='js/boxes.js'></script>