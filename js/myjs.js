// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header1 = document.getElementById("myHeader1");

// Get the offset position of the navbar
var sticky1 = header1.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky1) {
    header1.classList.add("sticky1");
  } else {
    header1.classList.remove("sticky1");
  }
}