<?php
function sortArrayByParityII($arr){
    $length = count($arr);
    $even_arr = [];
    $odd_arr = [];
    for($i=0; $i<$length; $i++){
        if($arr[$i]%2==0){
            $even_arr[] = $arr[$i];
        }else{
            $odd_arr[] = $arr[$i];
        }
    }
    $res_arr = [];
    for($j=0; $j<$length; $j++){
        if($j%2==0){
            $res_arr[] = $even_arr[$j/2];
        }else{
            $res_arr[] = $odd_arr[$j/2];
        }
    }
    $output = $res_arr;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Sort Array By Parity II</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array A of non-negative integers, half of the integers in A are odd,
    and half of the integers are even.</p>
<p>Sort the array so that whenever A[i] is odd, i is odd; and whenever A[i] is
    even, i is even.</p>
<p>You may return any answer array that satisfies this condition.</p>

<h3>Example1:</h3><p><b>Input:</b> [4,2,5,7]<br>
    <b>Output:</b> [4,5,2,7]<br>
    <b>Explanation:</b>[4,7,2,5], [2,5,4,7], [2,7,4,5] would also have been accepted.
    </p>

<h3>Note: </h3><p>
<ol>
    <li>2 <= A.length <= 20000</li>
    <li>A.length % 2 == 0</li>
    <li>0 <= A[i] <= 1000</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>Go back to check <strong>Sort Array By Parity</strong>. You will ready for 
    this if you fully understand the previous one.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [4,2,5,7]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = sortArrayByParityII([4,2,5,7]);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>