<?php
session_start();
//include ("includes/header_home.php");
include("includes/functions.php");
include("includes/config.php");

$form = sanitizeString($_POST['form']);
$username = sanitizeString($_POST['username']);
$emailaddress = sanitizeString($_POST['emailaddress']);
$pword = sanitizeString($_POST['pword']);

switch($form)
{
    case "login":
        $sql2 = "SELECT * FROM user WHERE username = '$username'";
        $rs2 = mysqli_query($mysqli, $sql2);
        while($row2 = mysqli_fetch_array($rs2)){
            $dbpw =  $row2['usurp'];
        }
        if($ispasswordcorrect = password_verify($pword, $dbpw)){
            echo "pw correct";
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $username;
            if($_SESSION["loggedin"]){
                echo "logged in";
                echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
            }
        }
        else{
            echo "incorrect";
        }
        break;
    case "signup":
        $pword = password_hash($pword, PASSWORD_BCRYPT);
        $accesslevel = "user";
        $sql = "INSERT INTO user (username, email, usurp, accesslevel) VALUES ('$username', '$emailaddress', '$pword', '$accesslevel')";
        $mysqli->query($sql);
        break;
    case "blog";
        $title = sanitizeString($_POST['title']);
        $blog = nl2br($_POST['blog']);
        $blog = sanitizeString($_POST['blog']);
        $sql3 = "INSERT INTO blog (username, title, blogpost, date) VALUES (\"$username\", \"$title\", \"$blog\", NOW())";
        echo "<script type='text/javascript'>window.location.href = 'blog.php';</script>";
        $rs3  = mysqli_query($mysqli, $sql3)
        or die('unable to save blog');
        break;
    default:
        break;
}



?>