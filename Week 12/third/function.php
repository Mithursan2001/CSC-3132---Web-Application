<html>
    <body>
        <h1>  Function </h1>

<?php
function writeMsg(){
    echo "Hello world!";
}
writeMsg();
echo "<br>";


function setMarks($minMark=50) {
    echo "The Mark is : $minMark </br>";
 }
    setMarks(95);
    setMarks(); // will use the default value of 50
    setMarks(80);
?>

</body>
</html>
