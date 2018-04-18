<?php
$j = 'skdajDJ';
$s = "skjvloejDXJKdjhakJS";
for ($x = 0; $x < strlen($j); $x++) {
    $arr[substr($j, $x, 1)] = 0;
}
print_r($arr);
for ($y = 0; $y < strlen($s); $y++) {
    $index = substr($s, $y, 1);
    echo "index->".$index."<br>";
    if (isset($arr[$index])) {
        print_r($index);
        $arr[$index] ++;
        echo "<br>";
    } else {
        $arr[substr($s, $y, 0)] = 0;
    }
}
$sum = 0;
foreach ($arr as $key => $value) {
    $sum += $value;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <p>Q: You're given strings J representing the types of stones that are jewels, and S representing the stones you have.  Each character in S is a type of stone you have.  You want to know how many of the stones you have are also jewels.

The letters in J are guaranteed distinct, and all characters in J and S are letters. Letters are case sensitive, so "a" is considered a different type of stone from "A".</p>
            <h3>Example1:</h3> <p>Input: J = "aA", S = "aAAbbbb"<br>Output: 3</p>
            <h3>Example2: </h3><p>Input: J = "z", S = "ZZ"<br>Output: 0</p>
            <h3>Note: </h3><p>S and J will consist of letters and have length at most 50.</p><p>The characters in J are distinct.</p>
        </div>
        <hr>
        <p>Here is what the code represent:</p>
        <h3>J: skdajDJ</h3>
        <h3>S: skjvloejDXJKdjhakJS</h3>
        <b>The answer: </b><?php if(isset($sum)&&$sum!==null) echo $sum; ?>
    </body>
</html>
