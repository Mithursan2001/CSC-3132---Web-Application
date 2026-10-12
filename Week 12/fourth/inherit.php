<html>
    <body>
        <h1>class Circle inherit class Cylinder</h1>
        <?php
    class Circle {
    protected $radius;

    public function __construct($radius = 0) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
    }

    class Cylinder extends Circle {
    private $height;

    public function __construct($radius = 0, $height = 0) {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function calculateVolume() {
        return $this->calculateArea() * $this->height;
    }
    }


    $circle = new Circle(5);
    echo "Circle radius: " . $circle->getRadius() . "<br>";
    echo "Circle area: " . $circle->calculateArea() . "<br>";

    $cylinder = new Cylinder(5, 10);
    echo "Cylinder radius: " . $cylinder->getRadius() . "<br>";
    echo "Cylinder height: " . $cylinder->getHeight() . "<br>";
    echo "Cylinder volume: " . $cylinder->calculateVolume() . "<br>";
    ?>
     
    </body>
</html>