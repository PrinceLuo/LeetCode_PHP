<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Binary Gap</h1>
<h4>Diffculty: Easy</h4>
<p>Q:  Given a positive integer  <font color="red">N</font> , find and return the 
    longest distance between two consecutive 1's in the binary representation of 
    <font color="red">N</font>. If there aren't two consecutive 1's, return 0.<br>
<h3>Example1:</h3><p><b>Input:</b> 22<br>
    <b>Output:</b>2</p>
<b>Explanation: </b><p>22 in binary is 0b10110.<br>
    In the binary representation of 22, there are three ones, and two consecutive pairs of 1's.<br>
    The first consecutive pair of 1's have distance 2.<br>
    The second consecutive pair of 1's have distance 1.<br>
    The answer is the largest of these two distances, which is 2.<br>
</p>
<h3>Example2:</h3><p><b>Input:</b> 5<br>
    <b>Output:</b>2</p>
<b>Explanation: </b><p>5 in binary is 0b101.
</p>
<h3>Example3:</h3><p><b>Input:</b>6<br>
    <b>Output:</b>1</p>
<b>Explanation: </b><p>6 in binary is 0b110.</p>
<h3>Example4:</h3><p><b>Input:</b>8<br>
    <b>Output:</b>0</p>
<b>Explanation: </b><p>8 in binary is 0b1000.<br>
    There aren't any consecutive pairs of 1's in the binary representation of 8, 
    so we return 0.<br>
</p>

<p>Here is what the code represent:</p>
<h3>Input: </h3><br>
<b>The answer: </b>
<?php
if(isset($output)){
    echo "$output<br>";
}else{
    echo 'No result!';
}
?>
<p>TimeComplexity: </p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>