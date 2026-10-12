<html>
    <body>
        <h1>  Constant  </h1>
    <?php
    //Yes
    define("UCSC", "University of Colombo School of Computing");
    $result='';
    defined("UCSC")? $result='Yes': $result = 'No'; 
    echo $result;
    

    //No
    //define("ABC", "University of Colombo School of Computing");
    //$result='';
    //defined("UCiSC")? $result='Yes': $result = 'No'; 
    //echo $result;
    

// define(“UCSC", "University of Colombo School of Computing");
// echo("defined?".defined(“UCSC")); 
    ?>

    </body>
</html>