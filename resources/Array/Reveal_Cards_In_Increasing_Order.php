<?php

function orderMake($undo_arr, $re_mo) {
    $res = array();
    //$arr_len = count($undo_arr);
    while(count($undo_arr)>0){
        if(count($undo_arr)>1){
            $res[] = array_shift($undo_arr);
            $to_be_shifted = array_shift($undo_arr);
            array_push($undo_arr, $to_be_shifted);
        }else{
            // the last card
            $res[] = array_shift($undo_arr);
        }
        //print_r($undo_arr);
        //print_r($res);
        //echo "<br>";
    }
    return $res;
}

function revealCardsInIncreasingOrder($arr) {
    $input_arr = $arr;
    $arr_len = count($input_arr);
    // increasing order
    for ($i = 0; $i < $arr_len; $i++) {
        for ($j = $i + 1; $j < $arr_len; $j++) {
            if ($input_arr[$i] > $input_arr[$j]) {
                list($input_arr[$i], $input_arr[$j]) = array($input_arr[$j], $input_arr[$i]);
            }
        }
    }
    $increase_order = $input_arr;
    $output = array();
    for ($i = 0; $i < $arr_len; $i++) {
        $output[] = 0;
    }
    $order_nums = array();
    for ($i = 0; $i < $arr_len; $i++) {
        $order_nums[] = (int) $i;
    }
    $re_mo = 0;
    $real_order_nums = orderMake($order_nums, $re_mo);
    for ($i = 0; $i < $arr_len; $i++) {
        // key-->$real_order_nums[i]; value-->$increase_order
        $output[$real_order_nums[$i]] = $increase_order[$i];
    }
    return $output;
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/head.php';
?>
<h1>Reveal Cards In Increasing Order</h1>
<h4>Diffculty: Medium</h4>
<p>In a deck of cards, every card has a unique integer.  You can order the deck
    in any order you want.</p>
<p>Initially, all the cards start face down (unrevealed) in one deck.</p>
<p>Now, you do the following steps repeatedly, until all cards are revealed:
<ul class="list_numeric">
    <li>Take the top card of the deck, reveal it, and take it out of the deck.</li>
    <li>If there are still cards in the deck, put the next top card of the deck at the bottom of the deck.</li>
    <li>If there are still unrevealed cards, go back to step 1.  Otherwise, stop.</li>
</ul>
</p>
<p>Return an ordering of the deck that would reveal the cards in <strong>increasing order.</strong></p>
<p>The first entry in the answer is considered to be the top of the deck.</p>
<h3>Example:</h3><p><strong>Input:</strong> [17,13,11,2,3,5,7]<br>
    <strong>Output:</strong> [2,13,3,11,5,17,7]<br>
    <strong>Explanation:</strong> We get the deck in the order [17,13,11,2,3,5,7] (this order doesn't matter), and reorder it.
    After reordering, the deck starts as [2,13,3,11,5,17,7], where 2 is the top of the deck.
    We reveal 2, and move 13 to the bottom.  The deck is now [3,11,5,17,7,13].
    We reveal 3, and move 11 to the bottom.  The deck is now [5,17,7,13,11].
    We reveal 5, and move 17 to the bottom.  The deck is now [7,13,11,17].
    We reveal 7, and move 13 to the bottom.  The deck is now [11,17,13].
    We reveal 11, and move 17 to the bottom.  The deck is now [13,17].
    We reveal 13, and move 17 to the bottom.  The deck is now [17].
    We reveal 17.
    Since all the cards revealed are in increasing order, the answer is correct.
</p>
<h3>Follow up: </h3><p>
    If you have figured out the O(n) solution, try coding another solution using
    the divide and conquer approach, which is more subtle.
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [17,13,11,2,3,5,7]</h3>

<b>The answer: 
    <?php
    $output = revealCardsInIncreasingOrder([17, 13, 11, 2, 3, 5, 7]);
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
    Make a array, the key is refer to the position of the output array, and the 
    value refer to the numbers in the increasing order. The point is to make
    that array correctly, and implement it to re-order the output array correctly.
</p>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/footer.php'; ?>