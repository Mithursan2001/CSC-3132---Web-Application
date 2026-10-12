<html>
    <body>
        <h1>  global Scope </h1>

<?php
$x=5;
function mytest(){  
    echo "<p>Variable x inside function is: $x</p>";
}
mytest();
echo "<p>Variable x outside function is: $x</p>";


$x=5;
$y=10;
function mytest(){  
    global $x,$y;
    $y=$x+$y;
}
mytest();
echo "$y";



?>

</body>
</html>