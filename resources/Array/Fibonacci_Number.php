<?php
function fibonacciNumber($n){
    // n >= 1; 0===>0; 1===>1
    $sum = 1;
    $previous = 0;
    for($i=2; $i<=$n;$i++){
        $tmp = $sum;
        $sum = $sum + $previous;
        $previous = $tmp;
    }
    $output = $sum;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Fibonacci Number</h1>
<h4>Diffculty: Easy</h4>
<p>The <strong>Fibonacci numbers</strong>, commonly denoted F(n) form a
    sequence, called the <strong>Fibonacci sequence</strong>, such that each
    number is the sum of the two preceding ones, starting from 0 and 1. That is,</p>
<p>F(0) = 0,   F(1) = 1</p>
<p>F(N) = F(N - 1) + F(N - 2), for N > 1.</p>
<p>Given N, calculate F(N).</p>

<h3>Example1:</h3><p><b>Input:</b> 2<br>
    <b>Output:</b> 1<br>
    <b>Explanation:</b>F(2) = F(1) + F(0) = 1 + 0 = 1.
    </p>
<h3>Example2:</h3><p><b>Input:</b> 3<br>
    <b>Output:</b> 2<br>
    <b>Explanation:</b>F(3) = F(2) + F(1) = 1 + 1 = 2.
    </p>
<h3>Example3:</h3><p><b>Input:</b> 4<br>
    <b>Output:</b> 3<br>
    <b>Explanation:</b>F(4) = F(3) + F(2) = 2 + 1 = 3.
    </p>

<h3>Note: </h3><p>
<ul>
    <li>0 ≤ N ≤ 30.</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>Sometimes, Math method will cost more time.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 6</h3>
<strong>The answer: </strong><br>
<?php

$output_num = fibonacciNumber(6);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>