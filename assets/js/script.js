function myFunction(x) {
  if (x.matches) {
    var navbar = document.getElementById("navbar");
    // If media query matches
    navbar.classList.add("fixed-top");
  } else {
    var navbar = document.getElementById("navbar");
    navbar.classList.add("bg-white");
    navbar.classList.add("fixed-top");
  }
}
var x = window.matchMedia("(min-width: 992px)");
myFunction(x); // Call listener function at run time
// x.addListener(myFunction); // Attach listener function on state changes

// const currPage = window.location.pathname;
// const activePage =
// console.log(currPage);
// console.log("ok");

// var url = window.location.pathname;
// url = url.split('/').pop();
// console.log(url);

// $(document).ready(function () {

// });
// $("a.nav-link").on("click", function () {
//   // $(".nav-link.active").removeClass("active");
//   console.log('oke');
//   // $(this).addClass("active");
//   $( this ).addClass( 'active' ).siblings().removeClass( 'active' );
//   // $(this).addClass("active");
// })

// navbar
$(function () {
  var current = location.pathname;
  $('.nav-link').each(function () {
    var $this = $(this);
    let url = $this.attr('href').split('/');
    url.shift();
    url.shift();
    url.shift();
    
    let nav = '/microconn/' + url;

    console.log(url);

    if(nav == current) {
      $this.addClass('active');
    }
  })
})
