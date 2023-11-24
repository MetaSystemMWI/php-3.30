<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // function write(){
        //     echo "Hello wrold";
        // }
        // write();


        // function family($fname, $last){
        //     echo "$fname $last<br>";
        // }
        // family("Ali", "Ahmed");
        // family("Aanees","a");
        // family("Aamir","a");
        // family("Azam","a");
        // family("Aslam","");
        // family("Ahemd","");
        // family("Asif","");


        // function add(int $a, int $b){
        //     return $a+$b;
        // }
        // echo add(5,8); -->
    
    // declare(strict_types= 1);
        // function add(int $a, int $b){
      // return $a+$b;
        // }
        // echo add(5, 5); -->
        
        function setHeight(int $m = 50){
            echo "the height is : $m <br>";
        }

        setHeight(350);
        setHeight();
        setHeight(600);

        ?>
</body>
</html>