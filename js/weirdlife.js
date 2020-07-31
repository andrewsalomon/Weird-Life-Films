
//Preloader

 window.paceOptions = {
  ajax: true, // Monitors all ajax requests on the page
  document: false, // Checks for the existance of specific elements on the page
  eventLag: false, // Checks the document readyState
  restartOnPushState: false,
  restartOnRequestAfter: false,
};

//Initial Scroll Fix

 if ( $("body").is("#front-page") ) {


  $({myScrollTop:window.pageYOffset}).animate({myScrollTop:1500}, {
      duration: 1,
      step: function(val) {
      window.scrollTo(0, val);
      }
  });

//Infinite Scroll

  $(window).scroll(function() {
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
      $(window).scrollTop(0);
      
    }
});
}

//Opacity On Scroll

$(document).ready(function() {

    $(window).scroll(function(){
      $('.collage-2').css("opacity", 0 +
        $(window).scrollTop()/2000)
     })
    $(window).scroll(function(){
      $('.collage-3').css("opacity", 0 +
        $(window).scrollTop()/3000)
     })
    $(window).scroll(function(){
      $('.collage-4').css("opacity", 0 +
        $(window).scrollTop()/4300)
     })
    $(window).scroll(function(){
      $('.collage-5').css("opacity", 0 +
        $(window).scrollTop()/5300)
     })
    $(window).scroll(function(){
      $('.collage-5').css("opacity", 0 +
        $(window).scrollTop()/6300)
     })
});

//3D Scroll


var lastPos = document.body.scrollTop || document.documentElement.scrollTop,
    perspective = -5000,
    zSpacing = -2000;
    zVals = [],
    $frames = $(".frame"),
    frames = $frames.toArray(),
    numFrames = $frames.length;

for(var i=0; i<numFrames;i++) { zVals.push((numFrames-i)*zSpacing);}


$(window).scroll(function(d,e) {
  var top = document.body.scrollTop || document.documentElement.scrollTop,
      delta = lastPos - top;
  lastPos = top;
  for(var i=0;i<numFrames;i++){
    var newZVal = (zVals[i]+=(delta*-1.5)),
        frame = frames[i],
        transform = "translateZ("+newZVal+"px)",
        opacity = newZVal < 200 ? 1 : 1 - parseInt((newZVal-200)/(perspective-200)*10)/10,
        display = newZVal < perspective ? "none" : "block";
    frame.setAttribute("style",
     "-webkit-transform:"+transform+";-moz-transform:"+transform+";display:"+display+";opacity:"+opacity);
  }
});


//Mobile Nav

jQuery(function ($) {

    $( ".hamburger" ).click(function() {
        $(".pop-up").css("display", "block");
    });
    $( ".hamburger" ).click(function() {
        $(".hamburger").css("display", "none");
    });
    $( ".exit" ).click(function() {
        $(".pop-up").css("display", "none");
    });
    $( ".exit" ).click(function() {
        $(".hamburger").css("display", "block");
    });
    $( ".home-nav" ).mouseover(function() {
        $(".index-click").css("display", "block");
    });
    $( ".home-nav" ).mouseout(function() {
        $(".index-click").css("display", "none");
    });
    $( ".about-nav" ).mouseover(function() {
        $(".about-click").css("display", "block");
    });
    $( ".about-nav" ).mouseout(function() {
        $(".about-click").css("display", "none");
    });

});


//Collage Hover Interaction


VanillaTilt.init(document.querySelectorAll(".d-1"),{
	max: 50,
    startX: 0,
    startY: 0,
	speed: 5000,
    scale: 1,
    transition: true,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    perspective: 200,
    glare: false,
    reset: true,
    axis: null,
});
VanillaTilt.init(document.querySelectorAll(".d-2"),{
	max: 50,
    reverse: true,
    startX: 0,
    startY: 0,
	speed: 5000,
    scale: 1,
    transition: true,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    perspective: 200,
    glare: false,
    reset: true,
    axis: null,
});
 