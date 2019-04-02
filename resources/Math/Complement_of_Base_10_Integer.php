<?php
$inte = 5;

function complementOfBase10Integer($arr, $k){
    
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Smallest Range I</h1>
<h4>Diffculty: Easy</h4>
<p>Every non-negative integer N has a binary representation.  For example, 5
    can be represented as "101" in binary, 11 as "1011" in binary, and so on.
    Note that except for N = 0, there are no leading zeroes in any binary representation.</p>
<p>The complement of a binary representation is the number in binary you get
    when changing every 1 to a 0 and 0 to a 1.  For example, the complement of
    "101" in binary is "010" in binary.</p>
<p>For a given number N in base-10, return the complement of it's binary
    representation as a base-10 integer.</p>
<h3>Example1:</h3><p><b>Input:</b> 5<br>
    <b>Output:</b> 2<br>
    <b>Explanation:</b> 5 is "101" in binary, with complement "010" in binary, which is 2 in base-10.
    </p>
<h3>Example2:</h3><p><b>Input:</b> 7<br>
    <b>Output:</b> 0<br>
    <b>Explanation:</b> 7 is "111" in binary, with complement "000" in binary, which is 0 in base-10.
    </p>
<h3>Example3:</h3><p><b>Input:</b> 10<br>
    <b>Output:</b> 5<br>
    <b>Explanation:</b> 10 is "1010" in binary, with complement "0101" in binary, which is 5 in base-10.
    </p>

<h3>Note: </h3><p>
<ul>
    <li>0 <= N < 10^9</li>
    
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>The key is to find the maximun and minimum number of the input array,
and calculate the difference between the two number. And compare it with the 
input K.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: A = [0,7,6,3], K = 2</h3>
<strong>The answer: </strong><br>
<?php
$output_num = complementOfBase10Integer([0,7,6,3], 2);
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>