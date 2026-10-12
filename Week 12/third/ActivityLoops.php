<html>
    <body>
        <h1>  Activity : Loops </h1>

<?php
$person = array("Dj","Kamal","de","Lanerole");
foreach($person as $value){
    $length = strlen($value);
    switch($length){
        case 0:
            case 1:
                case 2:
                    echo "short\n";
                    break;
                    case 3:
                        case 4:
                            case 5:
                                echo "medium\n";
                                break;
                                default:
                                echo "long\n";
    }
}
?>

</body>
</html>
