<?php
function smallestRange($arr, $k){
    $input_arr = $arr;
    $range = $k;
    $max = $input_arr[0];
    $min = $input_arr[0];
    foreach($input_arr as $input_num){
        $min = $input_num<$min?$input_num:$min;
        $max = $input_num>$max?$input_num:$max;
    }
    if(($max-$min)>$range*2){
        $gap = ($max-$min)-$range*2;
    }else{
        $gap = 0;
    }
    $output = $gap;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Smallest Range I</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array A of integers, for each integer A[i] we may choose any x with 
    -K <= x <= K, and add x to A[i]. After this process, we have some array B.
    Return the smallest possible difference between the maximum value of B and 
    the minimum value of B.</p>
<h3>Example1:</h3><p><b>Input:</b> A = [1], K = 0<br>
    <b>Output:</b> 0<br>
    </p>
<h3>Example2:</h3><p><b>Input:</b> A = [1,3,6], K = 3<br>
    <b>Output:</b> 0<br>
    <b>Explanation:</b> B = [3,3,3] or B = [4,4,4]
    </p>
<h3>Example3:</h3><p><b>Input:</b> A = [0,10], K = 2<br>
    <b>Output:</b> 6<br>
    <b>Explanation:</b> B = [2,8]
    </p>
<h3>Note: </h3><p>
<ul>
    <li>1 <= A.length <= 10000</li>
    <li>0 <= A[i] <= 10000</li>
    <li>0 <= K <= 10000</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>The key is to find the maximun and minimum number of the input array,
and calculate the difference between the two number. And compare it with the 
input K.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: A = [0,7,6,3], K = 2</h3>
<strong>The answer: </strong><br>
<?php
$output_num = smallestRange([0,7,6,3], 2);
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>