<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // $str = "Apples and bananas Mianwali";
        // $pattern  = "/w(ali)/i";
        // echo preg_match($pattern, $str);
        // echo preg_match_all($pattern, $str);

        // echo preg_replace($pattern, "Lahore", $str);

        // filter, grep, last_error, match, match_all, replace, replace_callback, replace_callback_array,
        // split, quote

        $input = [
            "it is 5 o'clock",
            "40 days",
            "No nmber here",
            "in the year 2023"
        ];
        $result  = preg_filter('/[0-9]+/', '{$0}',$input);
        print_r($result);
    ?>
</body>
</html>