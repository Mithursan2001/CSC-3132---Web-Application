<html>
    <body>
        <h1> foreach loop </h1>

<?php
    $person = array("Nimal","Kamal","Sunil","Amal");
    foreach($person as $value) { 
        echo "$value \n";
    }

    echo "<br>";
    foreach($person as $i=>$value) {
        echo "$i=>\n"; 
        echo "$value \n";
    }
?>
?>

</body>
</html>