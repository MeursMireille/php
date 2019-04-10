<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="test.css">
</head>
<body>

<?php

//Hier gaan we spelen, dit is de playground

?>



<!-- some text -->

$ characterName = "John";
$ characterAge = 45;

echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>;"

echo "Tenetur, $ characterName blanditiis aliquam mollitia vitae laboriosam rem, $ characterAge corrupti natus dolor aliquid nobis tempora laudantium numquam non doloribus. <br>;"

echo "Earum distinctio harum est quidem corporis, libero aliquid aspernatur. <br>;"

echo "Commodi iste deleniti veniam nulla in dolore molestias quibusdam, ipsa quae tenetur, repellendus laborum maiores officiis minima rem doloremque cum. <br>;"

echo "Mollitia voluptatum atque quibusdam recusandae placeat? <br>;"


// Om info van de user te krijgen en terug te gebruiken
<form action="site.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <input type="submit">
</form>
<br>
<?php echo $_GET["name"] ?>





Voorbeeld van en php file
-------------------------
<?php
//Animal Categories
include("animals/Animal.php");
include("animals/Bird.php");
include("animals/Fish.php");
include("animals/Mammal.php");
//Birds
include "animals/Birds/Eagle.php";
include "animals/Birds/Owl.php";
include "animals/Birds/Penguin.php";
//Fish
include "animals/Fish/Shark.php";
include "animals/Fish/Tuna.php";
include "animals/Fish/SwordFish.php";
//Mammals
include "animals/Mammals/Dolphin.php";
include "animals/Mammals/Elephant.php";
include "animals/Mammals/Lion.php";
//Zoo
include "zoo/Zoo.php";
?>
