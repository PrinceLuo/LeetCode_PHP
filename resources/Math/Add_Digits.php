<?php
function addDigits($num){
    $output = ($num - 1) % 9 + 1;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Add Digits</h1>
<h4>Diffculty: Easy</h4>
<p>Given a non-negative integer num, repeatedly add all its digits until the
    result has only one digit..</p>

<h3>Example1:</h3><p><b>Input:</b> 38<br>
    <b>Output:</b> 2<br>
    <strong>Explanation: </strong>The process is like: 3 + 8 = 11, 1 + 1 = 2. 
             Since 2 has only one digit, return it.
    </p>
<h3>Follow up:</h3><p>Could you do it without any loop/recursion in O(1) runtime?
    </p>

<h3>Note: </h3><p>

</p>
<hr>
<h3>Hint: </h3>
<p>Again, a pure math problem. Details in https://en.wikipedia.org/wiki/Digital_root</p>

<hr>
<p>Here is what the code represent:</p>
<h3>Input: 157</h3>
<strong>The answer: </strong><br>
<?php

$output_num = addDigits(157);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>