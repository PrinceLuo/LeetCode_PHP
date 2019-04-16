<?php

function flippingAnImage($arr){
    $output = [];
    foreach ($arr as $subarr) {
        $output_sub = [];
        $reverse_arr = array_reverse($subarr);
        foreach ($reverse_arr as $value){
            $output_sub[] = $value ^ 1;
        }
        $output[] = $output_sub;
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Sort Array By Parity</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array A of non-negative integers, return an array consisting of all
    the even elements of A, followed by all the odd elements of A.</p>
<p>You may return any answer array that satisfies this condition.</p>

<h3>Example1:</h3><p><b>Input:</b> [3,1,2,4]<br>
    <b>Output:</b> [2,4,3,1]<br>
    The outputs [4,2,3,1], [2,4,1,3], and [4,2,1,3] would also be accepted.
    </p>

<h3>Note: </h3><p>
<ol>
    <li>1 <= A.length <= 5000</li>
    <li>0 <= A[i] <= 5000</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>Think of the structure of the array, and try to do it in O(n)</p>
<p>**The even numbers are in the front of the array, while the odd numbers are on the other side.**</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [[1,1,0],[1,0,1],[0,0,0]]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = flippingAnImage([[1,1,0],[1,0,1],[0,0,0]]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>