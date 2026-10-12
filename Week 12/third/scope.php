<html>
    <body>
        <h1>  Scope </h1>

<?php
function mytest(){
    $x=5;
    echo "<p>Variable x inside function is: $x</p>";
}
mytest();
echo "<p>VAriable x outside function is: $x</p>";
echo "<br>";
echo "<br>";

$x=5;
function mytest(){  
    echo "<p>Variable x inside function is: $x</p>";
}
mytest();
echo "<p>Variable x outside function is: $x</p>";
echo "<br>";
echo "<br>";


$x=5;
$y=10;
function mytest(){  
    global $x,$y;
    $y=$x+$y;
}
mytest();
echo "$y;


?>

</body>
</html>