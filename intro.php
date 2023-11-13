<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xamp Server Running</title>
</head>
<body>

    <!-- HTML
    CSS
    JavaScript (React Js, React Native)
    PHP (Laravel) : hypertext preprocessor 

    dynamics, create, open, read, write, delete, close
    add, delelte, modify, update, encrypt

    windows, linux, unix, Mac OS
    Apache, IIS
    mysql, oracle, sql, maria, monodb, firebase

    php 7 php 5.6 -->

    <?php
        //single line
        #single line
        /*  multiple lines */ 

        // php

        // variable creating


        // $text=10.5; #float variable
        // $y=12; #integer variable
        // $z ='a'; # character variable
        // $x="hi"; #string variable
        // echo "This is my value " .$x. "!";

        // echo $text + $y;

        // local 
        // global
        // static
         
        // $x=5;
        // function myTest(){
        //     global $x;   
        //     echo "<p>Variabel x inside function is:$x<p>";
        // }
        // myTest();

        // echo "<p>Variabel x outside function is:$x<p>";


        function myTest(){
            static $x = 0;
            $x++;
            echo $x;
            
        }

        myTest();
        myTest();
        myTest();
        myTest();
        myTest();
        myTest();

    ?>

</body>
</html>
