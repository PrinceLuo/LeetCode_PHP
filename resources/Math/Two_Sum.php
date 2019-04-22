<?php

function twoSum($arr, $target){
    $map = [];
    foreach ($arr as $key=>$value){
        $map[$value] = $key;
    }
    foreach ($arr as $k=>$v){
        $expected_tar = $target - $v;
        if(isset($map[$expected_tar])){
            $output = [$k, $map[$expected_tar]];
        }
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Two Sum</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array of integers, return <strong>indices</strong> of the two
    numbers such that they add up to a specific target.</p>
<p>You may assume that each input would have <strong><i>exactly</i></strong> one
    solution, and you may not use the same element twice.</p>

<h3>Example:</h3><p><b>Input:</b> Given nums = [2, 7, 11, 15], target = 9,<br>
    <b>Output:</b> [0, 1]<br>
    <strong>Explanation: </strong>Because nums[0] + nums[1] = 2 + 7 = 9,
return [0, 1].
    </p>

<h3>Note: </h3><p>

</p>
<hr>
<h3>Hint: </h3>
<p>If you make use of the mapping technique, the time complexity will drop dramatically</p>
<p>**Make use of the isset and array_key_exists at the same time, it could deal 
with the situation that the array value iss NULL, which the isset will return
false, but a valid existence.**</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [2, 7, 11, 15], 9</h3>
<strong>The answer: </strong><br>
<?php

$output_num = twoSum([2, 7, 11, 15],9);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n*m)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>