<?php
function divisorGame($num){
    if($num%2==0){
        return TRUE;
    }else{
        return FALSE;
    }
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Two Sum</h1>
<h4>Diffculty: Medium</h4>
<p>Alice and Bob take turns playing a game, with Alice starting first.</p>
<p>Initially, there is a number N on the chalkboard.  On each player's turn,
    that player makes a <i>move</i> consisting of:
<ul>
    <li>Choosing any x with 0 < x < N and N % x == 0.</li>
    <li>Replacing the number N on the chalkboard with N - x.</li>
</ul>
</p>
<p>Also, if a player cannot make a move, they lose the game.</p>
<p>Return True if and only if Alice wins the game, assuming both players play optimally.</p>
<h3>Example1:</h3><p><b>Input:</b> 2<br>
    <b>Output:</b> true<br>
    <strong>Explanation: </strong>Alice chooses 1, and Bob has no more moves.
    </p>
<h3>Example2:</h3><p><b>Input:</b> 3<br>
    <b>Output:</b> false<br>
    <strong>Explanation: </strong>Alice chooses 1, Bob chooses 1, and Alice has no more moves.
    </p>

<h3>Note: </h3><p>
<ol>
    <li>1 <= N <= 1000</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>First of all, this is all about math. It is easy but tricky. Worth a review.</p>
<p>Basically, 1, Alice loses; 2, Alice wins; 3, Alice loses. </p>
<p>Then for numbers that greater than 3:
<ol>
    <li>If it is a ODD number O, you can only find a ODD number X that N%X==0; and you can only have a ODD number n that n=N-O</li>
    <li>If it is a EVEN number E, you can obtionally find a EVEN number Y that E%Y==0; and you can only have a EVEN number n that n=E-Y</li>
    <li>If it is a EVEN number E, you can also find a ODD number O that E%O==0; and you can only have a EVEN number n that n=E-O(you can always find it, ex:1)</li>
    <li>So obviously, the one that get an even number always have the control.</li>
</ol>
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 49</h3>
<strong>The answer: </strong><br>
<?php

$output_num = divisorGame(49);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>