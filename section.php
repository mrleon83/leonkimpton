<?php
include ("includes/header_home.php");
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php

if($page_title === "Leon Kimpton - Web Development"){
  //Container (Web Section)
$list .= "<div id=\"portfolio\" class=\"container-fluid text-center bg-grey\">";
$list .= "<h4>My Web Development Projects</h4>";
$list .= "<div class=\"row text-center\">";
$list .= "<div class=\"col-sm-4\">";
$list .= "<div class=\"thumbnail\">";
$list .= "<img class=\"radius\" src=\"images/web.jpg\" alt=\"Web Pic\" width=\"400\" height=\"300\">";
$list .= "<p><strong>Web</strong></p>";
$list .= "<p>Project 1 - The Bophins (In progress) </p>";
$list .= "</div>";
$list .= "</div>";
$list .= "<div class=\"col-sm-4\">";
$list .= "<div class=\"thumbnail\">";
$list .= "<img class=\"radius\" src=\"images/web.jpg\" alt=\"Web Pic\" width=\"400\" height=\"300\">";
$list .= "<p><strong>Web</strong></p>";
$list .= "<p>Project 2 - Michele Ann Art</p>";
$list .= "</div>";
$list .= "</div>";
$list .= "<div class=\"col-sm-4\">";
$list .= "<div class=\"thumbnail\">";
$list .= "<img class=\"radius\" src=\"images/web.jpg\" alt=\"Web Pic\" width=\"400\" height=\"300\">";
$list .= "<p><strong>Web</strong></p>";
$list .= "<p>Project 3 - Simon Ballard Builder</p>";
$list .= "</div>";
$list .= "</div>";
$list .= "</div><br>";
}
if($page_title === "Leon Kimpton - Photography"){
 //Container (Web Section)
$list .= "<div id=\"portfolio\" class=\"container-fluid text-center bg-grey\">";
include ("gallery.php");
$list .= "</div><br>";
}
if($page_title === "Leon Kimpton - Music!"){
include_once("music.php");
}
echo $list;

?>
<?php
include("contact.php");
include ("footer.php");
?>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

$("#sendform").click(function()
{
var data = {
    name: $("#name").val(),
    email: $("#email").val(),
    message: $("#comments").val()
};
$.ajax({
    type: "POST",
    url: "email.php",
    data: data,
    success: function(){
        $('.success').fadeIn(1000);
    }
});
});


</script>
<script src="js/src/js/lightbox.js"></script>
</body>
</html>