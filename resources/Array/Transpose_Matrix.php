<?php
function transposeMatrix($arr){
    // n >= 1; 0===>0; 1===>1
    $length = count($arr);
    $sublength = count($arr[0]);
    $output = [];
    for($i=0; $i<$sublength; $i++){
        $tmp_arr = [];
        for($j=0; $j<$length;$j++){
            $tmp_arr[] = $arr[$j][$i];
        }
        $output[] = $tmp_arr;
        unset($tmp_arr);
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Fibonacci Number</h1>
<h4>Diffculty: Easy</h4>
<p>Given a matrix A, return the transpose of A.</p>
<p>The transpose of a matrix is the matrix flipped over it's main diagonal, 
    switching the row and column indices of the matrix.</p>
<h3>Example1:</h3><p><b>Input:</b> [[1,2,3],[4,5,6],[7,8,9]]<br>
    <b>Output:</b> [[1,4,7],[2,5,8],[3,6,9]]<br>
<h3>Example2:</h3><p><b>Input:</b> [[1,2,3],[4,5,6]]<br>
    <b>Output:</b> [[1,4],[2,5],[3,6]]<br>
    
<h3>Note: </h3><p>
<ol>
    <li>1 <= A.length <= 1000</li>
    <li>1 <= A[0].length <= 1000</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>Nothing need to remind.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 6</h3>
<strong>The answer: </strong><br>
<?php

$output_num = transposeMatrix([[1,2,3],[4,5,6]]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>