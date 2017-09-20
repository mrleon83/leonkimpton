<?php
include ("includes/header_home.php");
session_start;

?>
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>My Work</h4>
  <div class="row">
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="section.php?s=w"><img class="radius" src="images/web.jpg" alt="Web Pic" width="400" height="300"></a>
        <p><strong>Web</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="section.php?s=p"><img class="radius" src="images/forest.jpg" alt="Forest" width="400" height="300"></a>
        <p><strong>Photography</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <a href="section.php?s=m"><img  class="radius" src="images/music.jpg" alt="Music" width="400" height="300"></a>
        <p><strong>Music </strong></p>
      </div>
    </div>
  </div><br>



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