<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is Required";
            }else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z]*$/",$name)){
                    $nameErr ="Only Letters and with space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is Required";
            }else{
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr ="invalid Email format";
                }
            }

            if(empty($_POST["website"])){
                $website = "";
            }else{
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:https?|ftp):\/\/www.\)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                    $websiteErr ="Invalid URL";
                }
            }
            if(empty($_POST["comment"])){
                $comment = "";
            }else{
                $comment = test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        Name: <input type="text" name="name"> <span class="error">* <?php echo $nameErr; ?></span><br><br>
        E-mail: <input type="text" name="email"> <span class="error">* <?php echo $emailErr; ?><br><br>
        Website: <input type="text" name="website"><br><br>
        comment: <textarea name="comment" cols="40" rows="5"></textarea><br><br>
        Gender: 
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit"> 
    </form>

    <?php 
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $gender;
    ?>
</body>
</html>