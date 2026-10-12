<html>
    <body>
        <h1> All Variable </h1>

<?php
$a = "Hello";
var_dump($a);
echo $a;
echo"<h2> My first Page</h2>";
echo "<br>";

// 1. String
$stringVar = "Hello, World!";
var_dump($stringVar);
echo $stringVar;
echo "<br>";

// 2. Integer
$intVar = 42;
var_dump($intVar);
echo $intVar;
echo "<br>";

// 3. Float / Double
$floatVar = 3.14159;
var_dump($floatVar);
echo $floatVar;
echo "<br>";

// 4. Boolean
$boolVar = true;
var_dump($boolVar);
echo $boolVar;
echo "<br>";

// 5. Array
$arrayVar = array("apple", "banana", "cherry");
var_dump($arrayVar);
echo $arrayVar[0] . ", " . $arrayVar[1] . ", " . $arrayVar[2] . "\n\n";
echo "<br>";

// 6. Object
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
echo "<br>";

$objectVar = new Person("Alice", 30);
var_dump($objectVar);
echo $objectVar->name . " is " . $objectVar->age . " years old.\n\n";

// 7. NULL
$nullVar = NULL;
var_dump($nullVar);
echo "This is a null variable.\n\n";
echo "<br>";

// 8. Resource (e.g., file handle)
$resourceVar = fopen(__FILE__, "r");
var_dump($resourceVar);
if (is_resource($resourceVar)) {
    echo "This is a resource type.\n\n";
    fclose($resourceVar); // always close resources
}
echo "<br>";

// 9. Constant
define("SITE_NAME", "My Website");
var_dump(SITE_NAME);
echo SITE_NAME . "\n\n";
echo "<br>";

$name = "Mithursan Peranantham";
echo "My name is " .$name. " and I'm intelligent and beautiful boy";


$subject1= "Maths";
$subject2= "Science";
$subject3= "English";
$marks1=90;
$marks2=95;
$marks3=99;

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Subject</th>
        <th>Marks</th>
      </tr>";
echo "<tr>
        <td>$subject1</td>
        <td>$marks1</td>
      </tr>";
echo "<tr>
        <td>$subject2</td>
        <td>$marks2</td>
      </tr>";
echo "<tr>
        <td>$subject3</td>
        <td>$marks3</td>
      </tr>";
echo "</table>";
echo "<br>";





?>

</body>
</html>