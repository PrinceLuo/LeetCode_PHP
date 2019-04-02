<?php
function pancakeSorting($arr){
    $input_arr = $arr;
    $index_arr = array();
    foreach($input_arr as $key=>$value){
        $index_arr[(string)$key] = $value;
    }
    arsort($index_arr);
    $arr_len = count($input_arr);
    $output = array();
    foreach($index_arr as $key=>$value){
        $pos = (int)$key+1;
        foreach($output as $move){
            // the original pos is inside the move
            if($pos<=$move){
                $pos = $move + 1 - $pos;
            }
            echo $pos.'-->';
        }
        $output[] = $pos;
        $output[] = $arr_len;
        $arr_len--;
    }
    return $output;
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/head.php';
?>
<h1>Pancake Sorting</h1>
<h4>Diffculty: Medium</h4>
<p>Given an array A, we can perform a <i>pancake flip</i>: We choose some
    positive integer <strong>k <= A.length</strong>, then reverse the order of
    the first <strong>k</strong> elements of A.  We want to perform zero or more
    pancake flips (doing them one after another in succession) to sort the
    array <strong>A</strong>.</p>
<p>Return the k-values corresponding to a sequence of pancake flips that sort A.
    Any valid answer that sorts the array within <strong>10 * A.length</strong>
    flips will be judged as correct.</p>
<h3>Example1:</h3><p><strong>Input:</strong> [3,2,4,1]<br>
    <strong>Output:</strong> [4,2,4,3]<br>
    <strong>Explanation:</strong> We perform 4 pancake flips, with k values 4, 2, 4, and 3.
Starting state: A = [3, 2, 4, 1]
After 1st flip (k=4): A = [1, 4, 2, 3]
After 2nd flip (k=2): A = [4, 1, 2, 3]
After 3rd flip (k=4): A = [3, 2, 1, 4]
After 4th flip (k=3): A = [1, 2, 3, 4], which is sorted. 
</p>
<h3>Example2:</h3><p><strong>Input:</strong> [1,2,3]<br>
    <strong>Output:</strong> []<br>
    <strong>Explanation:</strong> The input is already sorted, so there is no need to flip anything.
Note that other answers, such as [3, 3], would also be accepted.
</p>
<br>
<h3>Note:</h3>
<ol>
    <li>1 <= A.length <= 100</li>
    <li>A[i] is a permutation of [1, 2, ..., A.length]</li>
</ol>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [3, 2, 4, 1]</h3>

<b>The answer: 
    <?php
    $output = pancakeSorting([3, 2, 4, 1]);
    if (isset($output) && count($output) > 0) {
        print_r($output);
    } else {
        echo 'No output!';
    }
    ?>
</b>
<p>TimeComplexity: O(n^2)</p>
<hr>
<p>
    <b>Hints: </b><br>
    The tricky part is to create an algorithm to represent the k length reverse
</p>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/footer.php'; ?>