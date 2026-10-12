<html>
    <body>
        <h1> Switch </h1>

<?php
     $favcolor="blue";
     switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";   
            break;
        case "green":
            echo "Your favorite color is green!";  
            break;
        default:
            echo "Your favorite color is neither red, blue, or green!";
        }
        echo "<br>";

    $favcolor="blue";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
           
        case "blue":
            echo "Your favorite color is blue!";   
            
        case "green":
            echo "Your favorite color is green!";  
           
        default:
            echo "Your favorite color is neither red, blue, or green!";
        }
?>

</body>
</html>