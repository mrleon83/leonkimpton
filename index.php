<?php
include ("includes/header_home.php");
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include_once("analyticstracking.php") ?>
<div class="jumbotron text-center">
  <h1>Leon Kimpton</h1> 
  <p><a href="section.php?s=w" class="jumbolinks">Web Developer</a>, <a href="section.php?s=p" class="jumbolinks">Photographer</a>, <a href="section.php?s=m" class="jumbolinks">Musician..</a></p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Leon Kimpton</h2>
      <h4 style="text-align:justify">Hi, I'm Leon, and this is my website to show you what I've done in the past, and an insight into current projects.</h4>
      <p style="text-align:justify">I am a creative person and as you will see, I develop websites, have a keen interest in photography, and in my free time I'm a multi-instrumentalist. I have a Youtube channel called <a href="https://www.youtube.com/channel/UCpm1P0ZJ1PABgRkZXINg8aw">Dragon Heart Studio</a> which also chronicles my desire to learn to sing!</p>
      <p style="text-align:justify">After many years of working in the insurance industry, I sought a more enriching career. As I have a natural aptitude to computer programming, I embarked on a study program with the Open University. I have so far completed the Diploma of Higher Education in Computing and IT, with a view to complete the final stage of my studies to obtain a Degree in Computing and IT in the future.</p>
      <p style="text-align:justify">I am currently employed as a Junior Web Developer using PHP, Javascript, HTML, CSS and Microsoft SQL, and have been in my post for over 1 year.</p>
      <p style="text-align:justify">At this moment, I am procuring additional projects to expand my skills and to challenge myself to learn new technologies and methodology.</p>
      <p style="text-align:justify">I live in Northampton, England with my wife, Cat.</p>
    </div>
    <div class="col-sm-4">
      <img class="radius" src="images/me.jpg" alt="Photo of Leon Kimpton" width="300" height="300">
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>My Work</h4>
  <div class="row text-center slideanim">
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
        <p><strong>Music Video</strong></p>
      </div>
    </div>
  </div><br>

</div>
<!-- Container (Contact Section) -->
<?php

include ("contact.php");
include ("footer.php")
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
</script>

</body>
</html>