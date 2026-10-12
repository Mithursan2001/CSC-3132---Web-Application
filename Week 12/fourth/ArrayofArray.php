<html>
    <body>
        <h1>  Array of Array </h1>
    <?php
    $a = array("males" => array("a" => "Nimal","b" => "Amara","c" =>"Kamal"),
    "females" => array("a" => "Kumari", "b" => "Nirmala", "c" => "Kamala"),
    "fees" => array (2500,1500,500) );

    print_r($a);

    echo "<br>";
    echo "<br>";

    $b = array( 1=> "First Item", "item2" => "Second Item",
      5 => "Third item","Forth item" );
        foreach ($b as $key => $value){  
            echo $key," - ",$value,"\n";
        }
    ?>


    </body>
</html>

