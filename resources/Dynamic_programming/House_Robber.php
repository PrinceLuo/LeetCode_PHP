<?php $doc_public = $_SERVER['DOCUMENT_ROOT'] . '/public'; ?>
<?php
/**
 * score is the one that take record the maximan sum of the previous records.
 * Inside the for loop, the pp_score represent the largest sum fo far, and is 
 * going to compare with the "former" "new" sum; score keep updating if there 
 * is a larger sum. As it is keep comparing the former record, it has to compare
 * the last one before giving the last output.
 */
$input = array(1,4,5,3,44,9,5,50,2,8,11,7);
// start from 0
$prev_score = 0;
$score = 0;
for($i = 0; $i<count($input); $i++){
    $pp_scrore = $score;
    $new_score = $pp_scrore + $input[$i];
    $score = $pp_scrore<$prev?$prev:$pp_scrore;
    $prev = $new_score;
}
$output = $new_score>$score?$new_score:$score;
// start from 1
?>
<?php require_once $doc_public . '/inc/head.php'; ?>
<p>You are a professional robber planning to rob houses along a street. Each house 
    has a certain amount of money stashed, the only constraint stopping you from 
    robbing each of them is that adjacent houses have security system connected and 
    <b>it will automatically contact the police if two adjacent houses were broken into 
        on the same night.</b></p>
<p>
    Given a list of non-negative integers representing the amount of money of each 
    house, determine the maximum amount of money you can rob tonight <b>without alerting 
        the police.</b>
</p>
<h3>Example1:</h3><p>Input: [1,2,3,1]<br>
    Output: 4<br>
    Explanation: Rob house 1 (money = 1) and then rob house 3 (money = 3).<br>
    Total amount you can rob = 1 + 3 = 4.
</p>
<h3>Example2: </h3><p>Input: [2,7,9,3,1]<br>
    Output: 12<br>
    Explanation: Rob house 1 (money = 2), rob house 3 (money = 9) and rob house 5 (money = 1).<br>
    Total amount you can rob = 2 + 9 + 1 = 12.
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [1,4,5,3,44,9,5,50,2,8,11,7]</h3>

<b>The answer: <?php
if (isset($output) && !empty($output)) {
    echo $output;
}
?>
</b>
<p>TimeComplexity: n</p>
<hr>
<p><b>Hints: </b><br>
    add two parameters, called <i>prev_prev</i> and <i>prev</i>. <i>Prev</i> is the one that 
    is going to add the coming number in the array. And the <i>prev_prev</i> keep unchanged.
    Then the sum become the <i>new_score</i>. The <i>score</i> will be the the max of 
    <i>prev_prev</i> and <i>prev</i>. Finally, the <i>new_score</i> will become the next
     <i>prev_prev</i>.
</p>
<?php require_once $doc_public . '/inc/footer.php'; ?>