
var img = {
    blue: '<img src="https://i.postimg.cc/Sj0x0Mqw/camisetagenshin.jpg"/>',
    purple: '<img src="https://i.postimg.cc/Sj0x0Mqw/camisetagenshin.jpg"/>',
    pink: '<img src="https://i.postimg.cc/SxSpnrZg/genshingbook.jpg"/>',
    red: '<img src="https://i.postimg.cc/VshSBSy9/figuritagenshin.jpg"/>',
    yellow: '<img src="https://i.postimg.cc/VshSBSy9/figuritagenshin.jpg"/>', };
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
      var rand = random(1, 5000) / 100;
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