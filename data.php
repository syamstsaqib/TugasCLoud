<?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
?>
<br>
<?php
    $x = 5985;
    var_dump($x);
?>
<br>
<?php
    $x = 10.365;
    var_dump($x);
?>
<br>
<?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
?>
<br>
<?php
    class Car {
        function Car() {
            $this->model = "VW";
        }
    }

    // create an object
    $herbie = new Car();

    // show object properties
    echo $herbie->model;
?>
<br>
    <?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
?>
<br>