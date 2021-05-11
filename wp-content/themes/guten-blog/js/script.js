function guten_blog_adjust_margin($) { 

	var headerHeight = jQuery('header#masthead').height() + 'px' ;
	jQuery('body.sticky').css('margin-top', headerHeight);

}

jQuery(window).resize(guten_blog_adjust_margin); 
jQuery(window).ready(guten_blog_adjust_margin); 

//Get the button
var mybutton = document.getElementById("scrollTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {guten_blog_scrollFunction()};

function guten_blog_scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function guten_blog_topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}