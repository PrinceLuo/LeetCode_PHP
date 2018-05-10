<?php

$doc_public = $_SERVER['DOCUMENT_ROOT'] . '/public';
$input = [7, 6, 4, 3, 1];
//$result = 0;
$result = best_sol($input);
/*
if ($result) {
//    $result = $ret;
//    print_r($result);
} else {

//    echo "The profit is 0.<br>";
//    print_r($result);
}
 */

function best_sol($arr = null) {

    $start = -1;
    $end = -1;
    $potential = -1;
    $profit = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i == 0) {
            $start = $i;
            $potential = $i;
        } else {
            if ($arr[$i] < $arr[$potential]) {
                $potential = $i;
//                print_r($i);
//                echo "CHANGING<br>";
            } else {
                if ($arr[$i] - $arr[$potential] > $profit) {
                    $profit = $arr[$i] - $arr[$potential];
                    $start = $potential;
                    $end = $i;
//                    print_r($i);
//                    echo "The profit is now: $profit.<br>";
                }
            }
        }
    }
    if ($profit > 0) {
        $res = array(
            'start' => $start,
            'end' => $end,
            'profit' => $profit
        );
        return $res;
    }
    return null;
}
?>
<?php require_once $doc_public . '/inc/head.php'; ?>
<h1>Best Time to  Buy and Sell Stock</h1>
<h4>Diffculty: Easy</h4>
<p>Say you have an array for which the ith element is the price of a given stock on day i.<br>
    If you were only permitted to complete at most one transaction (i.e., buy one and sell 
    one share of the stock), design an algorithm to find the maximum profit.<br>
    Note that you cannot sell a stock before you buy one.</p>
<h3>Example1:</h3><p>Input: [7,1,5,3,6,4]<br>
    Output: 5<br>
    Explanation: Buy on day 2 (price = 1) and sell on day 5 (price = 6), profit = 6-1 = 5.
    Not 7-1 = 6, as selling price needs to be larger than buying price.
</p>
<h3>Example2: </h3><p>Input: [7,6,4,3,1]<br>
    Output: 0<br>
    Explanation: In this case, no transaction is done, i.e. max profit = 0.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [7,6,4,3,1]</h3>

<b>The answer: </b>
<?php

if (isset($result) && $result !== null) {
    echo "<p>Buy on day " . $result['start'] . " and sell on day " . $result['end'] . ", the profit is: " . $result['profit'] . ".</p>";
} else {
    echo "<p>In this case, no transaction is done, i.e. max profit = 0.</p>";
}
?>
<p>TimeComplexity: n</p>
<?php require_once $doc_public . '/inc/footer.php'; ?>