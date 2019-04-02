<?php

function divide($arr) {
    // O(nlogn)
    $length = count($arr);
    if ($length > 2) {
        $mid = $length / 2;
        $pre_arr = array();
        $aft_arr = array();
        for ($i = 0; $i < $length; $i++) {
            if ($i <= $mid) {
                $pre_arr[] = $arr[$i];
            } else {
                $aft_arr[] = $arr[$i];
            }
        }
        $res_arr = sortMerge(divide($pre_arr), divide($aft_arr));
        return $res_arr;
    } else {
        if ($length > 1) {
            if ($arr[0] > $arr[1]) {
                $res_arr = array();
                $res_arr[] = $arr[1];
                $res_arr[] = $arr[0];
                return $res_arr;
            }
        }
        return $arr;
    }
}

function sortMerge($pre_arr, $aft_arr) {
    $pre_i = 0;
    $aft_i = 0;
    $pre_len = count($pre_arr);
    $aft_len = count($aft_arr);
    $res_arr = [];
    while ($pre_i < $pre_len || $aft_i < $aft_len) {
        if ($pre_i >= $pre_len) {
            $res_arr[] = $aft_arr[$aft_i];
            $aft_i++;
        } elseif ($aft_i >= $aft_len) {
            $res_arr[] = $pre_arr[$pre_i];
            $pre_i++;
        } else {
            if ($pre_arr[$pre_i] > $aft_arr[$aft_i]) {
                $res_arr[] = $aft_arr[$aft_i];
                $aft_i++;
            } else {
                $res_arr[] = $pre_arr[$pre_i];
                $pre_i++;
            }
        }
    }
    return $res_arr;
}

function largestPerimeterTriangle($arr) {
    $input_arr = $arr;
    $sort_arr = divide($input_arr);
    $len = count($sort_arr);
    $sum = 0;
    for($i=$len-1;$i>=2;$i--){
        if($sort_arr[$i]<$sort_arr[$i-1]+$sort_arr[$i-2]){
            $sum = $sort_arr[$i]+$sort_arr[$i-1]+$sort_arr[$i-2];
            break;
        }
    }
    $output = $sum;
    return $output;
}

define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'] . '/public');
?>
<?php require_once(__PUBLIC__ . '/inc/head.php'); ?>
<h1>Largest Perimeter Triangle</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array A of positive lengths, return the largest perimeter of a
    triangle with <strong>non-zero area</strong>, formed from 3 of these lengths.</p>
<p>If it is impossible to form any triangle of non-zero area, return 0.</p>
<h3>Example1:</h3><p><b>Input:</b> [2,1,2]<br>
    <b>Output:</b> 5<br>
</p>
<h3>Example2:</h3><p><b>Input:</b> [1,2,1]<br>
    <b>Output:</b> 0<br>
</p>
<h3>Example3:</h3><p><b>Input:</b> [3,2,3,4]<br>
    <b>Output:</b> 10<br>
</p>
<h3>Example4:</h3><p><b>Input:</b> [3,6,2,3]<br>
    <b>Output:</b> 8<br>
</p>
<h3>Note:</h3><p>
<ol>
    <li>3 <= A.length <= 10000</li>
    <li>1 <= A[i] <= 10^6</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>
<ol>
    <li>It is making a triangle. So not all 3 number are suited.</li>
    <li>A practice of Merge Sort. You could do sort() function instead.</li>
</ol>
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [3,6,2,3]</h3>
<strong>The answer: </strong><br>
<?php
$output_num = largestPerimeterTriangle([3,6,2,3]);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: NlogN</p>

<?php require_once(__PUBLIC__ . '/inc/footer.php'); ?>