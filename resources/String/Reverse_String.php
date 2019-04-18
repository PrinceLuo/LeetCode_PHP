<?php

function reverseString($arr){
    $length = count($arr);
    for($i = 0, $j = $length - 1; $i<=$j; $i++, $j--){
        $tmp = $arr[$j];
        $arr[$j] = $arr[$i];
        $arr[$i] = $tmp;
    }
    return $arr;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Reverse String</h1>
<h4>Diffculty: Easy</h4>
<p>Write a function that reverses a string. The input string is given as an
    array of characters char[].
</p>
<p>Do not allocate extra space for another array, you must do this by
    <strong>modifying the input array</strong> in-place with O(1) extra memory.</p>
<p>You may assume all the characters consist of printable ascii characters.</p>
<h3>Example1:</h3><p><b>Input:</b> ["h","e","l","l","o"]<br>
    <b>Output:</b> ["o","l","l","e","h"]<br>
    </p>
<h3>Example2:</h3><p><b>Input:</b> ["H","a","n","n","a","h"]<br>
    <b>Output:</b> ["h","a","n","n","a","H"]<br>
    </p>
<h3>Note: </h3><p>
Skip this......
</p>
<hr>
<h3>Hint: </h3>
<p>Noting. Skip this.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: ["H","a","n","n","a","h"]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = reverseString(["H","a","n","n","a","h"]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>