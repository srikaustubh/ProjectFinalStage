<?php  session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JCUB Book Store</title>
<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main.css" />
<link href="styles/responsive.css" rel="stylesheet"  media="screen and (max-width: 960px)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body>
<?php
 
  // check session variable

  if (isset($_SESSION['valid_user']))
  {

    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
	echo "<a href=\"logout.php\">Logout</a>";
 }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	header('Location: login.html');   
  }  
?>
<div class="wrapper">
<header>
<div>
</div>
<table>
<tr><td><h1>JCUB Book Store</h1></td><td style="text-align:right;">

</table>
<nav class="nav">
<ul>
<li class="menulist"><a href="#">Home</a></li>
<li class="menulist"><a href="#">Buy Books</a></li>
<li class="menulist"><a href="#">Sell Books</a></li>
<li class="menulist"><a href="about_us.html">About US</a></li>
<li class="menulist"><a href="#">Contact US</a></li>
<li class="search"><form action="search.php"><input type="text" id="search-field" placeholder="Search"/>&nbsp;&nbsp;&nbsp;<input type="submit" value="search" /></form></li>
</ul>
</nav>
</header>
<section id="col1">
<p>news and events</p>
</section>
<section id="col2">
<p>Latest books uploaded</p>
</section>
<footer>
<p>
&#169; Team Awesome (01) March 2017</p>
</footer>
</div>

</body>

</html>
