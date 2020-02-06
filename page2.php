<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
    <div>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['animal'])) {
            echo "<img src=\"images/turtle.jpg\" alt=\"Turtle\" class=\"pic\">";
            echo "<br>";
            echo "<h2 class=\"text\">He Likes Turtles!</h2>";
        }

        if (isset($_GET['food'])) {
            echo "<img src=\"images/pizza.jpg\" alt=\"Pizza\" class=\"pic\">";
            echo "<br>";
            echo "<h2 class=\"text\">He Likes Pizza!</h2>";
            echo "<h3 class=\"text\">But He Isnt' Eating Carbs Right Now :(</h3>";
            
        }

        if (isset($_GET['redtext'])) {
            echo"<h2 class=\"redtext\">Proin ultricies facilisis orci varius gravida. Integer quis finibus tortor, ut porta quam. Donec id nisi dolor. Donec laoreet tempus ex, sed vehicula mauris rutrum eget. Nam aliquam vel magna quis pellentesque. Praesent consectetur facilisis neque, vel blandit lectus dapibus vel. Nunc sit amet lectus libero.</h2>";
        }

        if (isset($_GET['band'])) {
            echo "<h1>You think " . $_GET['band'] . " is the best.</h1>";
        }

        if (isset($_GET['background'])) {
            echo "<body class=\"bground\"></body>";
            echo "<br><br><h1 class=\"text\">MY EYES!!!</h1>";
        }

        if (isset($_GET['bwturtle'])) {
            echo "<img src=\"images/turtle.jpg\" alt=\"Black and White turtle image\" class=\"bwturtle\">";
        }

        if (isset($_GET['final'])) {
            echo "<h1 class=\"finalmsg\">I am finally finished with this assignment!</h1>";
        }

        
        }
    


    ?>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
    </div>
</body>
</html>