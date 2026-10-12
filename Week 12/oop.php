<?php
    class Circle{
        public $radius;

         function __construct($rad)
         {
            $this->radius = $rad;
         }

         public function getRadius()
         {
            return $radius;
         }

         public function setRadius($rad)
         {
            $this->radius = $rad;
         }

         public function calculateArea()
         {
            return 3.14*$this->radius**2;
         }
    }

    class Cylinder extends Circle{
        public $height;

        function __construct($rad,$hei)
        {
            $this->height = $hei;
            parent::__construct($rad);
        }

        public function getHeight()
        {
            return $height;
        }

        public function setHeight($hei)
        {
            $this->height = $hei;
        }

        public function calculateVolume()
        {
            return 3.14*$this->radius**2*$this->height;
        }
    }

    $c1 = new Circle(5);
    $Cy=new Cylinder(5,10);
    echo "circle area:".$c1->calculateArea()."</br>";
    echo "Cylinder Volume:".$Cy->calculateVolume();
    ?>