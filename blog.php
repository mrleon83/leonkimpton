<?php
session_start();
$blog = "yes";
$page_title = "blog";
include("includes/header_home.php");
include("includes/config.php");

      if(isset($loggedin))
      {
        echo "logged in";
      }
      else{
    }
$list .= "</br>";
$list .= "<p><h1 style=\"text-align:center;\">Welcome to my blog!</h1></p>";

    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $blogs = $mysqli->query($sql);
    while($row = mysqli_fetch_array($blogs))
    {
      $list .= "<div id=\"blog\" class=\"container-fluid\">";
      $list .= "<div class=\"row\">";
      $list .= "<div class=\"col-sm-12\">";
      $list .= "<h4>";
      $date = date_create($row['date']);     
      $date = date_format($date, "d-m-Y");
      $list .= $row['title'] . "-" . $date;
      $list .= "</h4>";
      $list .= "<p style=\"text-align:justify\">";
      $list .= nl2br($row['blogpost']);
      $list .= "</p>";
      $list .= "</div>";
      $list .= "</div>";
      $list .= "</div>";
      $blogpostid = $row['id'];

      /*
      $list .= "<div class=\"row\">";
      $list .= "<div class=\"col-sm-12\">";
      $list .= "<input type=\"button\" name=\"addcomment\" class=\"addcomment\" value=\"Add Comment\"  style=\"text-align:center;\">";
      $list .= "</div>";
      $list .= "</div>";    
      $list .= "<div class=\"commentform\">";
      //redo the form using standard bootstrap elements
      $list .= "<form class=\"form-horizontal\" action=\"submit_comment.php\" method=\"POST\">";
      $list .= "<div class=\"form-group\">";
        $list .= "<label class=\"control-label col-sm-2\" for=\"name\">Name: </label>";
        $list .= "<div class=\"col-sm-8\">";
        $list .= "<input type\"text\" class=\"form-control\" id=\"name\" name=\"name\">";
        $list .= "</div>";
      $list .= "</div>";
      $list .= "<div class=\"form-group\">";
        $list .= "<label class=\"control-label col-sm-2\" for=\"comment\">Comment: </label>";
        $list .= "<div class=\"col-sm-8\">";
        $list .= "<input type\"text\" class=\"form-control\" id=\"comment\" name=\"comment\">";
        $list .= "</div>";
      $list .= "</div>";
      $list .= "<input type=\"hidden\" name=\"blogid\" value=\"". $blogpostid . "\">";
      $list .= "<div class=\"form-group\">"; 
      $list .= "<div class=\"col-sm-offset-2 col-sm-10\">"; 
      $list .= "<button type=\"submit\" class=\"btn btn-default\">Submit</button>"; 
      $list .= "</div>"; 
      $list .= "</div>";      
      $list .= "</form>";
      $list .= "</div>";
      
      $sql2 = "SELECT * FROM comments WHERE blogid = \"$blogpostid\"";
      $comments = $mysqli->query($sql2);
      while($row2 = mysqli_fetch_array($comments))
      {
        $list .= "<div class=\"container-fluid\">";
      $list .= "<div class=\"row\">";
        $list .= "<div class=\"col-sm-2\">";
        $list .= "Name : </div>";
        $list .= "<div class=\"col-sm-10\">";
        $list .= $row2['username'];
        $list .= "</div>";
        $list .= "<div class=\"col-sm-2\">";
        $list .= "Comment : </div>";
        $list .= "<div class=\"col-sm-10\">";
        $list .= $row2['comment'];
        $list .= "</div>";
        $list .= "<div class=\"col-sm-2\">";
        $list .= "Date : </div>";
        $list .= "<div class=\"col-sm-10\">";
        $list .= $row2['date'];
        $list .= "</div>";
        $list .= "</div>";
        $list .= "</div>";
      }
*/
    }

echo $list;
echo "</br>";
include("contact.php");
include ("footer.php");
?>
<!--
<script type="text/javascript">
$(document).ready(function(){
  $('.addcomment').click(function(){
  alert("Add Comment Button CLicked, lets AJAX the buggery out of this");
  $('.commentform').slideToggle("slow");
  });
  
  
  });
</script>
-->