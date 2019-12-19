//TIMELINE
const items = document.querySelectorAll('#timeline li');

const isInViewport = el => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && 
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const run = () =>
items.forEach(item => {
  if (isInViewport(item)) {
    item.classList.add('show');
  }
});

window.addEventListener('load', run);
window.addEventListener('resize', run);
window.addEventListener('scroll', run);

//NAVBAR
$(document).ready(function() {

$(window).scroll(function () { 
  console.log($(window).scrollTop())
if ($(window).scrollTop() > 850) {
  $('.navbar').addClass('navbar-fixed');
}
if ($(window).scrollTop() < 851) {
  $('.navbar').removeClass('navbar-fixed');
}
});
});

//BACK TO TOP BUTTON
$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 300) {
      $('.gotop').fadeIn();
  } else {
      $('.gotop').fadeOut();
  }
});
$(document).ready(function() {
  $(".gotop").click(function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });
});

//SCROLL REVEAL
window.sr = ScrollReveal({ duration: 2000 });
sr.reveal('.reveal');

//ACCORDION
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


//SIDEBAR
function openNav() {
  document.getElementById("mySidebar").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


