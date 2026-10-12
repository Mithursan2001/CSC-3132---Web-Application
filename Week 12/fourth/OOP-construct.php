<html>
    <body>
        <h1>OOP construct</h1>

        <?php
        class Person {
            public $name = null;  
            public $sex = "m";  
            public $dob;
            private $bank_account_no;

            function __construct($name, $sex, $dob, $acc) {
                $this->name = $name;
                $this->sex = $sex;
                $this->dob = new DateTime($dob);
                $this->bank_account_no = $acc;
            }

            public function print_age($toDate) {
                $interval = $this->dob->diff(new DateTime($toDate));
                echo "Years - " . $interval->y . 
                     " Months - " . $interval->m . 
                     " Days - " . $interval->d;
            }
        }

        $p1 = new Person("Saman", "m", "1960-11-23", "123456");
        $p1->print_age("2015-02-06");
        ?>
    </body>
</html>
