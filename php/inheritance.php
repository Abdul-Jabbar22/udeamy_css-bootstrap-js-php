<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    class employee
    {
        public $name;
        public $age;
        public $salary;


        function __construct($n, $a, $s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info()
        {
            echo "<h3> employee profile </h3>";
            echo "employee name " . $this->name . "<br>";
            echo "employee name " . $this->age . "<br>";
            echo "employee name " . $this->salary . "<br>";
        }
    }
    class manager extends employee
    {
        public $ta = 1000;
        public $phone = 300;
        public $totalSalary;

        function info()
        {
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h3> Manager  profile </h3>";
            echo "employee name " . $this->name . "<br>";
            echo "employee name " . $this->age . "<br>";
            echo "employee name " .       $this->totalSalary . "<br>";
        }
     
    }
    $e1 = new manager("abdul", 25, 10000);
    $e2 = new employee ("ali", 22, 3000);

    $e1->info();
    $e2->info();
    ?>

</body>

</html>