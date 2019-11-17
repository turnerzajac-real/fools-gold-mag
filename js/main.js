// blog image hover states 

$(".feature-article-con").on('mouseenter', function(){
  $('.title').addClass('blue')
}).on('mouseleave', function(){
  $('.title').removeClass('blue')
})


// gem locations
function randomFromTo(from, to){
  return Math.floor(Math.random() * (to - from + 1) + from);
}

function moveRandom(id) {
  /* get container position and size
   * -- access method : cPos.top and cPos.left */
  var cPos = $('.hero-sec-con').offset();
  var cHeight = $('.hero-sec-con').height();
  var cWidth = $('.hero-sec-con').width();
  
  // get box padding (assume all padding have same value)
  var pad = parseInt($('.hero-sec-con').css('padding-top').replace('px', ''));
  
  // get movable box size
  var bHeight = $(id).height();
  var bWidth = $(id).width();
  
  // set maximum position
  maxY = cPos.top + cHeight - bHeight - pad;
  maxX = cPos.left + cWidth - bWidth - pad;
  
  // set minimum position
  minY = cPos.top + pad;
  minX = cPos.left + pad;
  
  // set new position			
  newY = randomFromTo(minY, maxY);
  newX = randomFromTo(minX, maxX);
  
  $(id).css({
    top: newY,
    left: newX,
    }, 500, function() {
  });
}

moveRandom('#gem01')
moveRandom('#gem02')
moveRandom('#gem03')
moveRandom('#gem04')
moveRandom('#gem05')
moveRandom('#gem06')
moveRandom('#gem06')
moveRandom('#gem08')
moveRandom('#gem09')
moveRandom('#gem10')
moveRandom('#gem11')
moveRandom('#gem12')

// roation
var rotate = document.getElementsByClassName('fast')
var rotateThree = document.getElementsByClassName('mid')
var rotateTwo = document.getElementsByClassName('slow')


TweenMax.to(rotate, 15, { rotation: "360", ease:Linear.easeNone, repeat:-1});
TweenMax.to(rotateThree, 25, { rotation: "360", ease:Linear.easeNone, repeat:-1});
TweenMax.to(rotateTwo, 32, { rotation: "-360", ease:Linear.easeNone, repeat:-1});

TweenMax.fromTo(rotate, 15, { y: "-100vh"}, { y: "100vh", ease:Linear.easeNone, repeat:-1});
TweenMax.fromTo(rotateThree, 25, { y: "-100vh"}, { y: "100vh", ease:Linear.easeNone, repeat:-1});
TweenMax.fromTo(rotateTwo, 32, { y: "-100vh"}, { y: "100vh", ease:Linear.easeNone, repeat:-1});

// nav resize

$(window).scroll(function() {
  if ($(this).scrollTop() > 50){
      $('.fg-logo-con').addClass("sticky");
  }
  else{
      $('.fg-logo-con').removeClass("sticky");
  }
});


