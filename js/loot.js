
var img = {
    blue: '<img src="https://i.postimg.cc/85PgC9nb/Llavero-pikachu.png"/>',
    purple: '<img src="https://zavers.es/14309-large_default/poke47.jpg"/>',
    pink: '<img src="https://i.postimg.cc/0ysV0md6/cartas-pokemon.png"/>',
    red: '<img src="https://images.wikidexcdn.net/mwuploads/wikidex/2/21/latest/20190605134318/Car%C3%A1tula_Pok%C3%A9mon_Espada.png"/>',
    yellow: '<img src="https://i.postimg.cc/TYRyj35d/pokemon-arceus.jpg"/>' };
function show(){
    for (var i = 0; i < 210; i++) {if (window.CP.shouldStopExecution(0)) break;
      var element = '<div class="card" style="background-color: lightblue;" data-rarity="blue" id=itemNumber' + i + '>' + img.blue + '</div>';
      var rand = random(1, 10000) / 100;
      if (rand < 20) {
        element = '<div class="card" style="background-color: purple;" data-rarity="purple" id=itemNumber' + i + '>' + img.purple + '</div>';
      }
      if (rand < 5) {
        element = '<div class="card" style="background-color: hotpink;" data-rarity="pink" id=itemNumber' + i + '>' + img.pink + '</div>';
      }
      if (rand < 2) {
        element = '<div class="card" style="background-color: red;" data-rarity="red" id=itemNumber' + i + '>' + img.red + '</div>';
      }
      if (rand < 0.5) {
        element = '<div class="card" style="background-color: yellow;" data-rarity="yellow" id=itemNumber' + i + '>' + img.yellow + '</div>';
      }
  
      $('#cardList').append(element);
    }window.CP.exitedLoop(0);
    $('.card').first().css('margin-left', -1000);
  }

  function reset() {
    $('.card').remove();
    for (var i = 0; i < 210; i++) {if (window.CP.shouldStopExecution(0)) break;
      var element = '<div class="card" style="background-color: lightblue;" data-rarity="blue" id=itemNumber' + i + '>' + img.blue + '</div>';
      var rand = random(1, 10000) / 100;
      if (rand < 20) {
        element = '<div class="card" style="background-color: purple;" data-rarity="purple" id=itemNumber' + i + '>' + img.purple + '</div>';
      }
      if (rand < 5) {
        element = '<div class="card" style="background-color: hotpink;" data-rarity="pink" id=itemNumber' + i + '>' + img.pink + '</div>';
      }
      if (rand < 2) {
        element = '<div class="card" style="background-color: red;" data-rarity="red" id=itemNumber' + i + '>' + img.red + '</div>';
      }
      if (rand < 0.5) {
        element = '<div class="card" style="background-color: yellow;" data-rarity="yellow" id=itemNumber' + i + '>' + img.yellow + '</div>';
      }
  
      $('#cardList').append(element);
    }window.CP.exitedLoop(0);
    $('.card').first().css('margin-left', -1000);
  }
  function openCase() {
    reset();
    var rand = random(1000, 20000);
    var childNumber = Math.floor(rand / 100) + 4;
    var timings = ["easeOutExpo"];
    var timing = timings[random(0, timings.length)];
    var reward = $('#itemNumber' + childNumber).attr('data-rarity');
  
    $('.card').first().animate({
      marginLeft: -rand },
    5000, timing, function () {
  
      var src = $('#itemNumber' + childNumber + ' img').attr('src');
      $('#itemNumber' + childNumber).css({ background: "linear-gradient(#00bf09, #246b27)" });
  
      $('#dialog-msg').html("You have received " + reward + " item!" + "<br><img src=" + src + ">");
  
      $('#dialog').dialog({
        modal: true,
        title: "New item!",
        resizeable: false,
        draggable: false,
        width: 400,
        buttons: {
          "Receive item": function () {
            $(this).dialog("close");
            // add resources
          } } });
  
  
    });
  
  
    //$('.card').css({backgroundColor: 'red'})
    //$('.card:nth-child('+(childNumber+1)+')').css({backgroundColor: 'green'})
  }
  
  function random(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
  }