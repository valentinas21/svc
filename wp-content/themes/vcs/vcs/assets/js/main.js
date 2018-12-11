(function($){




$(".navigation li a").click(function(event){
   event.preventDefault();
   $('html, body').animate({
     scrollTop: $( $(this).attr('href') ).offset().top
   },1500);

});
//burgeris
function myFunction(x) {
    x.classList.toggle("change");
}
document.querySelector('.burger').addEventListener('click', displayBurger)

  function displayBurger() {
    myFunction(this);
    document.querySelector('.navigation').classList.toggle("hide");
    // console.log(document.querySelector('.navigation'));
  };
  //top button

  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 900) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
  }
  $('#myBtn').click(topFunction);
  function topFunction() {
    $('html, body').animate({
      scrollTop: $( 'body' ).offset().top
    },1500);
  }
})(jQuery);
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);

}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
