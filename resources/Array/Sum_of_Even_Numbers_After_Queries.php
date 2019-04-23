<?php
function sumOfEvenNumbersAfterQueries($arr, $query){
    // n >= 1; 0===>0; 1===>1
    $even_arr = [];
    foreach($arr as $k=>$v){
        if($v%2==0){
            $even_arr[$k]=$v;
        }
    }
    $output = [];
    $length = count($query);
    for($i=0; $i<$length; $i++){
        $new_val = $arr[$query[$i][1]]+$query[$i][0];
        if($new_val%2==0){
            $even_arr[$query[$i][1]] = $new_val;
            $arr[$query[$i][1]] = $new_val;
            $output[] = array_sum($even_arr);
            
        }else{
            if(array_key_exists($query[$i][1], $even_arr)){
                unset($even_arr[$query[$i][1]]);
                $arr[$query[$i][1]] = $new_val;
                $output[] = array_sum($even_arr);
            }
        }
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Fibonacci Number</h1>
<h4>Diffculty: Easy</h4>
<p>We have an array A of integers, and an array queries of queries.</p>
<p><i>(Here, the given index = queries[i][1] is a 0-based index, and each query
        permanently modifies the array A.)</i></p>
<p>Return the answer to all queries.  Your answer array should have answer[i] as the answer to the i-th query.</p>

<h3>Example1:</h3><p><b>Input:</b> A = [1,2,3,4], queries = [[1,0],[-3,1],[-4,0],[2,3]]<br>
    <b>Output:</b> [8,6,2,4]<br>
    <b>Explanation:</b>At the beginning, the array is [1,2,3,4].
After adding 1 to A[0], the array is [2,2,3,4], and the sum of even values is 2 + 2 + 4 = 8.
After adding -3 to A[1], the array is [2,-1,3,4], and the sum of even values is 2 + 4 = 6.
After adding -4 to A[0], the array is [-2,-1,3,4], and the sum of even values is -2 + 4 = 2.
After adding 2 to A[3], the array is [-2,-1,3,6], and the sum of even values is -2 + 6 = 4.
    </p>

<h3>Note: </h3><p>
<ol>
    <li>1 <= A.length <= 10000</li>
    <li>-10000 <= A[i] <= 10000</li>
    <li>1 <= queries.length <= 10000</li>
    <li>-10000 <= queries[i][0] <= 10000</li>
    <li>0 <= queries[i][1] < A.length</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>The key of this question is to understand the meaning. Just have a look. No 
need to spend too much time on it.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 6</h3>
<strong>The answer: </strong><br>
<?php

$output_num = sumOfEvenNumbersAfterQueries([1,2,3,4], [[1,0],[-3,1],[-4,0],[2,3]]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>