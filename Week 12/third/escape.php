<html>
    <body>
        <h1>  PHP - Escape Characters </h1>
<pre>
<?php
$x = 'We are the so-called \'Vikings\' from the north.';
echo $x;
echo "<br>";

$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
echo "<br>";

$x = "Escape php variable name \$myvar";
echo $x;
echo "<br>";



$x = "Hello\nWorld";
echo $x;
echo "<br>";

$x = "Hello\rWorld";
echo $x;
echo "<br>";

$x = "Hello\tWorld";
echo $x;
echo "<br>";

?>
</pre>

<p>To preserve any whitespace or line breaks,
 we have wrapped the result in a PRE element</p>



</body>
</html>
