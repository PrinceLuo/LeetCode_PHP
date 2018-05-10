<?php $doc_public = $_SERVER['DOCUMENT_ROOT'] . '/public'; ?>
<?php
$input = array(-2, 1, -3, 4, -1, 2, 1, -5, 4);
$score = 0;
$max = 0;
for ($i = 0; $i < count($input); $i++) {
    $score += $input[$i];
    $max = $max > $score ? $max : $score;
    if ($score < 0) {
        $score = 0;
    }
}
$output = $max;
?>
<?php require_once $doc_public . '/inc/head.php'; ?>
<p>Given an integer array nums, find the contiguous subarray
    (containing at least one number) which has the largest sum and return its sum.</p>
<h3>Example:</h3><p>Input: [-2,1,-3,4,-1,2,1,-5,4]<br>
    Output: 6<br>
    Explanation: [4,-1,2,1] has the largest sum = 6.    
</p>
<h3>Follow up: </h3><p>
    If you have figured out the O(n) solution, try coding another solution using
    the divide and conquer approach, which is more subtle.
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [-2,1,-3,4,-1,2,1,-5,4]</h3>

<b>The answer: 
    <?php
    if (isset($output) && !empty($output)) {
        echo $output;
    } else {
        echo 'N/A';
    }
    ?>
</b>
<p>TimeComplexity: n</p>
<hr>
<p>
    <b>Hints: </b><br>
    Just keep reading the array. And keep recording the sum of the numbers. The sum 
    will be stored into the <i>score</i>, while it will change to zero as soon as it 
    turn to negative. Also, keep recording the max of the <i>score</i>, so that we 
    could always have the maximum of the score.
</p>
<?php require_once $doc_public . '/inc/footer.php'; ?>