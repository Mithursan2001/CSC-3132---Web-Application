<html>
    <body>
        <h1>  Array  </h1>
    <?php
    $a = array("Nimal","Saman");  
    array_push($a,"Kamal","Waruna");
    print_r($a);


    echo "<br>";
   
    //Using function
    $b = array("Nimal", "Saman");
    $b[] = "Kamal";   
    $b[] = "Waruna";  

    print_r($b);

    echo "<br>";
    
    //add miidle of the push
    $c = array("Nimal", "Saman", "Sunil");
    array_splice($c, 1, 0, array("Kamal", "Waruna"));
    print_r($c);

    echo "<br>";

    // lecturer's coding
    $d=array(0 => "Thoki",1 => "vithu",3 => "Mithu");
    $d[2]="yathees";

    print_r($d);
    echo("</br>");
    ksort($d);
    print_r($d);
    echo("</br>");
?>


    </body>
</html>

