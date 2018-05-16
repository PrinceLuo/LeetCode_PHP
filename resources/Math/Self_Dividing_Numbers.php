<?php
$doc_public = $_SERVER['DOCUMENT_ROOT'].'/public';

?>
<?php require_once $doc_public.'/inc/head.php'; ?>
<h1>Self Dividing Numbers</h1>
<h4>Diffculty: Easy</h4>
<p>Q:  A self-dividing number is a number that is divisible by every digit it contains.<br>
    For example, 128 is a self-dividing number because <font color="red">128 % 1 == 0</font>, <font color="red">128 % 2 == 0</font>, and <font color="red">128 % 8 == 0</font>.<br>
    Also, a self-dividing number is not allowed to contain the digit zero.<br>
    Given a lower and upper number bound, output a list of every possible self dividing number, including the bounds if possible.</p>
<h3>Example1:</h3><p><b>Input:</b> left = 1, right = 22<br>
    <b>Output:</b> [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 15, 22]</p>
<h3>Note: </h3><p>The boundaries of each input argument are <font color="red">1 <= left <= right <= 10000</font>.</p>
<hr>
        <p>Here is what the code represent:</p>
        <h3>Input: cost = [1, 100, 1, 1, 1, 100, 1, 1, 100, 1]</h3>
        <b>The answer: </b>
            <?php
            
            ?>
        <p>TimeComplexity: </p>
<?php require_once $doc_public.'/inc/footer.php'; ?>