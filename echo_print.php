<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- echo print -->
    <?php
        // echo "Hello world";
        // print("Hello world");
        // print "Hello world without <br> parenthesis";

        // $t = "hello my dear" ;
        // $x = 'How are you <br>';
        // print $x;


        // String, interger, float, boolean, array, object, null, resource

        // $x= 14;
        // echo $x;

        // $t = true;
        // $f= false;
        // echo $t;
        // echo $f;

        // echo "First line";
        // echo "2nd line";

        // print $t;
        // print $f;
        // print "First line";
        // print "2nd line <br>";

        // $car = array("valove", "bmw", "proton");
        // var_dump($car);
        // // echo $car;


        class Car {
            public $color;
            public $model;
            public function _construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a ". $this->color. " " . $this->model. "!";
            }
        }

        $mycar = new Car("Black", "Volvo");
        echo $mycar -> message();
        echo "<br>";
        $mycar = new Car("Red", "BMW");
        echo $mycar -> message();
        echo "<br>";
    ?>
</body>
</html>