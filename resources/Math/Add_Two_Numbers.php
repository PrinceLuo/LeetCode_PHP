<?php

function twoSum($str){
    
    preg_match_all('/(\d+|\+|\d+)/', $str, $matches);
    $num1_arr = [];
    $num2_arr = [];
    $fir_to_sec = FALSE;
    for($i=0;$i<count($matches[0]);$i++){
        if($matches[0][$i]=='+'){
            $fir_to_sec = TRUE;
        }elseif($fir_to_sec){
            $num2_arr[] = $matches[0][$i];
        }else{
            $num1_arr[] = $matches[0][$i];
        }
    }
    
    $i = 0;
    $j = 0;
    $carry = 0;
    $sum_arr = [];
    while ($i < count($num1_arr)||$j < count($num2_arr)){
        if(isset($num1_arr[$i])&&isset($num2_arr[$j])){
            $sum = $num1_arr[$i] + $num2_arr[$j] + $carry;
            if($sum >= 10){
                $sum_arr[] = $sum%10;
                $carry = 1;
            }else{
                $sum_arr[] = $sum;
                $carry = 0;
            }
            $i++;
            $j++;
        }elseif(isset($num1_arr[$i])){
            $sum = $num1_arr[$i] + $carry;
            if($sum >= 10){
                $sum_arr[] = $sum%10;
                $carry = 1;
            }else{
                $sum_arr[] = $sum;
                $carry = 0;
            }
            $i++;
        }else{
            $sum = $num2_arr[$j] + $to_add;
            if($sum >= 10){
                $sum_arr[] = $sum%10;
                $carry = 1;
            }else{
                $sum_arr[] = $sum;
                $carry = 0;
            }
            $j++;
        }
    }
    $output = implode('->', $sum_arr);
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Two Sum</h1>
<h4>Diffculty: Medium</h4>
<p>You are given two non-empty linked lists representing two 
    <strong>non-negative</strong> integers. The digits are stored in 
    <strong>reverse order</strong> and each of their nodes contain a single
    digit. Add the two numbers and return it as a linked list.</p>
<p>You may assume the two numbers do not contain any leading zero, except the
    number 0 itself.</p>

<h3>Example:</h3><p><b>Input:</b> (2 -> 4 -> 3) + (5 -> 6 -> 4)<br>
    <b>Output:</b> 7 -> 0 -> 8<br>
    <strong>Explanation: </strong>342 + 465 = 807.
return [0, 1].
    </p>

<h3>Note: </h3><p>

</p>
<hr>
<h3>Hint: </h3>
<p>Please practice the regex in PHP deeply.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)</h3>
<strong>The answer: </strong><br>
<?php

$output_num = twoSum('(2 -> 4 -> 3) + (5 -> 6 -> 4)');
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>