<?php
function mergeSort($arr1, $arr2){
    $length1 = count($arr1);
    $length2 = count($arr2);
    $sorted_arr1 = [];
    $sorted_arr2 = [];
    if($length1 > 2){
        $subarr1 = [];
        $subarr2 = [];
        for($i = 0; $i < $length1; $i++){
            if($i<$length1/2){
                $subarr1[] = $arr1[$i];
            }else{
                $subarr2[] = $arr1[$i];
            }
        }
        $sorted_arr1 = mergeSort($subarr1, $subarr2);
    }else{
        if($length1 == 2){
            if($arr1[0]>$arr1[1]){
                $sorted_arr1[] = $arr1[1];
                $sorted_arr1[] = $arr1[0];       
            }else{
                $sorted_arr1 = $arr1;
            }
        }else{
            $sorted_arr1 = $arr1;
        }
    }
    if($length2 > 2){
        $subarr1 = [];
        $subarr2 = [];
        for($i = 0; $i < $length2; $i++){
            if($i<$length2/2){
                $subarr1[] = $arr2[$i];
            }else{
                $subarr2[] = $arr2[$i];
            }
        }
        $sorted_arr2 = mergeSort($subarr1, $subarr2);
    }else{
        if($length2 == 2){
            if($arr2[0]>$arr2[1]){
                $sorted_arr2[] = $arr2[1];
                $sorted_arr2[] = $arr2[0];       
            }else{
                $sorted_arr2 = $arr2;
            }
        }else{
            $sorted_arr2 = $arr2;
        }
    }
    $index1 = 0;
    $index2 = 0;
    $res_arr = [];
    while ($index1<$length1||$index2<$length2){
        if($index1==$length1&&$index2!=$length2){
            $res_arr[] = $sorted_arr2[$index2];
            
            $index2++;
        }elseif($index1!=$length1&&$index2==$length2){
            $res_arr[] = $sorted_arr1[$index1];
            $index1++;
        }else{
            if($sorted_arr1[$index1]<$sorted_arr2[$index2]){
                $res_arr[] = $sorted_arr1[$index1];
                $index1++;
            }else{
                $res_arr[] = $sorted_arr2[$index2];
                $index2++;
            }
        }
    }
    return $res_arr;
}
function squaresOfASortedArray($arr) {
    $length = count($arr);
    $sqare_arr = array();
    foreach ($arr as $value){
        $sqare_arr[] = $value * $value;
    }
    $arr1= [];
    $arr2 = [];
    for($i=0;$i<$length;$i++){
        if($i<$length/2){
            $arr1[] = $sqare_arr[$i];
        }else{
            $arr2[] = $sqare_arr[$i];
        }
    }
    
    $output = mergeSort($arr1, $arr2);
    return $output;
}

define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'] . '/public');
?>
<?php require_once(__PUBLIC__ . '/inc/head.php'); ?>
<h1>Squares of a Sorted Array</h1>
<h4>Diffculty: Easy</h4>
<p>Given an array of integers A sorted in non-decreasing order, return an array
    of the squares of each number, also in sorted non-decreasing order.</p>

<h3>Example1:</h3><p><b>Input:</b> [-4,-1,0,3,10]<br>
    <b>Output:</b> [0,1,9,16,100]<br><br>
    
</p>
<h3>Example2:</h3><p><b>Input:</b> [-7,-3,2,3,11]<br>
    <b>Output:</b> [4,9,9,49,121]<br><br>
</p>
<h3>Note:</h3><p>
<ol>
    <li>1 <= A.length <= 10000</li>
    <li>-10000 <= A[i] <= 10000</li>
    <li>A is sorted in non-decreasing order.</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>
For a single A[i][j], it has a potential value. When i and j getting large, it 
has less cases. So for a N length array A, we calculate the best (minimal) value
of itself from the end of this array.
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [-4,-1,0,3,10]</h3>
<strong>The answer: </strong><br>
<?php
$output_num = squaresOfASortedArray([-4,-1,0,3,10]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n^2)</p>

<?php require_once(__PUBLIC__ . '/inc/footer.php'); ?>