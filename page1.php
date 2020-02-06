<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
<?PHP require "includes/project2-header.inc.php"; ?>

<h2>1) This link will show Bruce's favorite animal.</h2>
<h5>
<a href="page2.php?animal">http://localhost/page2.php?animal</a>
</h5><br>

<h2>2) This link will show Bruce's favorite food.</h2>
<h5>
<a href="page2.php?food">http://localhost/page2.php?food</a>
</h5><br>

<h2>3) This link will print some lorem ipsum in  red text.</h2>
<h5>        
<a href="page2.php?redtext">http://localhost/page2.php?redtext</a>
</h5><br>
<h3>4) Choose the best rock band</h3>
<form action="page2.php?band" method="GET">
    <input type="radio" name="band" value="METALLICA!"> Metallica<br>
    <input type="radio" name="band" value="ACDC!"> ACDC<br>
    <input type="radio" name="band" value="LED ZEPPELIN!"> Led Zeppelin<br><br>
    <input type="submit" value="Choose">
</form><br><br>

<h2>5) This link will change the background of the page to an eye bleeding color.</h2>
<h5>
    <a href="page2.php?background">http://localhost/page2.php?background</a>
</h5>

<h2>6) This link will show the turtle image in black and white.</h2>
<h5>
    <a href="page2.php?bwturtle">http://localhost/page2.php?bwturtle</a>
</h5>

<h2>7) This link will echo a final message.</h2>
<h5>
    <a href="page2.php?final">http://localhost/page2.php?final</a>
</h5>
<br>

<?php require "includes/project2-footer.inc.php"; ?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>