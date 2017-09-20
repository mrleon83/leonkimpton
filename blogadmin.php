<?php
session_start();
echo $_SESSION['user'];
include ("includes/header_home.php");
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="blog" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <form action="login.php" method="post">
          <table>
            <tr><th>Login</th></tr>
            <tr><th>UserName: </th><td><input type="text" name="username"></td></tr>
            <tr><th>Password: </th><td><input type="password" name="pword"></td></tr>
            <input type="hidden" name="form" value="login">
            <tr><td colspan="2"><input type="submit" value="login"></td></tr>
          </table>
        </form>
    </div>
  </div>
</div>

<div id="blog" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <form action="login.php" method="post">
          <table>
            <tr><th>New Blog Post</th></tr>
            <tr><th>Title </th><td><input type="text" name="title"></td></tr>
            <tr><th>Blog: </th><td><textarea name="blog" rows="5" cols="100"></textarea></td></tr>
            <input type="hidden" name="form" value="blog">
            <tr><td colspan="2"><input type="submit" value="Submit"></td></tr>
          </table>
        </form>
    </div>
  </div>
</div>
<?php
echo $_SESSION['user'];
?>
<!--
<div id="blog" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <form action="login.php" method="post">
          <table>
            <tr><th colspan="2">Signup (Once only)</th></tr>
            <tr><th>UserName: </th><td><input type="text" name="username"></td></tr>
            <tr><th>Email Address: </th><td><input type="text" name="emailaddress"></td></tr>
            <tr><th>Password: </th><td><input type="password" name="pword"></td></tr>
            <input type="hidden" name="form" value="signup">
            <tr><td colspan="2"><input type="submit" value="login"></td></tr>
          </table>
        </form>
    </div>
  </div>
</div>
-->