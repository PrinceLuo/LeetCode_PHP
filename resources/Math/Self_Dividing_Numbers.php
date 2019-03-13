<?php
$input_num = 22;
$output_num = [];
for ($i = 1; $i <= $input_num; $i++) {
    $flag = FALSE;
    $tens_mod = 0;
    $hundreds_mod = 0;
    $thousands_mod = 0;
    // once place
    $once = (int) ($i % 10);
    $once_mod = 9999;
    if ($once != 0) {
        $once_mod = $i % $once;
    }
    // tens place
    if ($i >= 10) {
        $tens_mod = 9999;
        $tens = (int) ($i % 100 / 10);
        if ($tens != 0) {
            $tens_mod = $i % $tens;
        }
    }
    // hundreds place
    if ($i >= 100) {
        $hundreds = (int) ($i % 1000 / 100);
        $hundreds_mod = 9999;
        if ($hundreds != 0) {
            $hundreds_mod = $i % $hundreds;
        }
    }
    // thousands place
    if ($i >= 1000) {
        $thousands_mod = 9999;
        $thousands = (int) ($i % 10000 / 1000);
        if ($thousands != 0) {
            $thousands_mod = $i % $thousands;
        }
    }
    if ($once_mod == 0 && $tens_mod == 0 && $hundreds_mod == 0 && $thousands_mod == 0) {
        $output_num[] = $i;
    }
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
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
<h3>Input: 4396</h3>
<b>The answer: </b>
<?php
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: N</p>

<?php rrequire_once(__PUBLIC__.'/inc/footer.php'); ?>