<?php $doc_public = $_SERVER['DOCUMENT_ROOT'] . '/public'; ?>
<?php
function countBits($num){
    $input = (int)$num;
    $output = array();
    $output[] = 0; // initialization
    for($i=0;$i<=$input;$i++){
        if($i%2==0){
            $output[$i] = $output[$i/2];
        }else{
            $output[$i] = $output[$i/2] + 1;
        }
    }
    return $output;
}
?>
<?php require_once $doc_public . '/inc/head.php'; ?>
<h1>Counting Bits</h1>
<h4>Diffculty: Medium</h4>
<p>
    Given a non negative integer number num. For every numbers i in the range 
    0 ≤ i ≤ num calculate the number of 1's in their binary representation and 
    return them as an array.
</p>
<h3>Example1:</h3><p>Input: 2<br>
    Output: [0,1,1]<br>
</p>
<h3>Example2: </h3><p>Input: 5<br>
    Output: [0,1,1,2,1,2]<br>
</p>
<h3>Follow up: </h3>
<ul>
    <li>It is very easy to come up with a solution with run time 
        <strong>O(n*sizeof(integer))</strong>. But can you do it in linear time 
        <strong>O(n)</strong> /possibly in a single pass?</li>
    <li>Space complexity should be <strong>O(n)</strong>.</li>
    <li>Can you do it like a boss? Do it without using any builtin function like
        <strong>__builtin_popcount</strong> in c++ or in any other language.</li>
</ul>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 10</h3>

<b>The answer: <?php
$answer = countBits(10);
if (isset($answer) && count($answer)>0) {
    $output_string = implode(', ', $answer);
    echo '['.$output_string.']';
}
?>
</b>
<p>TimeComplexity: O(n)</p>
<hr>
<p><b>Hints: </b><br>
    Binary representation, which has a very close relationship with the number
    【2】. With the inspiration from bitwise operation, there is a special 
    connection between the number of i and i/2. The core idea comes from the
    bitwise operation. The 【i/2】 is the left bitwise operation.
</p>
<?php require_once $doc_public . '/inc/footer.php'; ?>