(function($){

 /* Paselektinus containerius, kur yra menu
neleidžia pereikit į kitą pempleitą leidžia
tik scrolint į apačią*/
$(/*".navigation li a "*/).click(function(event){
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
