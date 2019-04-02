<?php
function complexNumberMultiplication($str1, $str2){
    $input_str1 = $str1;
    $input_str2 = $str2;
    preg_match('/^(\d+)\+(-{0,1}\d+)i/', $input_str1, $matches1);
    preg_match('/^(\d+)\+(-{0,1}\d+)i/', $input_str2,$matches2);
    $a1 = (int)$matches1[1];
    $a2 = (int)$matches2[1];
    $b1 = (int)$matches1[2];
    $b2 = (int)$matches2[2];
    $new_a = $a1*$a2 - ($b1*$b2);
    $new_b = $a1*$b2+$a2*$b1;
    $output = (string)$new_a.'+'.(string)$new_b.'i';
    return $output;
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/head.php';
?>
<h1>Complex Number Multiplication</h1>
<h4>Diffculty: Medium</h4>
<p>Given two strings representing two complex numbers.</p>
<p>You need to return a string representing their multiplication. Note i2 = -1
    according to the definition.</p>

<h3>Example1:</h3><p><strong>Input:</strong> "1+1i", "1+1i"<br>
    <strong>Output:</strong> "0+2i"<br>
    <strong>Explanation:</strong> (1 + i) * (1 + i) = 1 + i2 + 2 * i = 2i, and you need convert it to the form of 0+2i.
</p>
<h3>Example2:</h3><p><strong>Input:</strong> "1+-1i", "1+-1i"<br>
    <strong>Output:</strong> "0+-2i"<br>
    <strong>Explanation:</strong> (1 - i) * (1 - i) = 1 + i2 - 2 * i = -2i, and you need convert it to the form of 0+-2i.
</p>
<h3>Note:</h3>
<ol>
    <li>The input strings will not have extra blank.</li>
    <li>The input strings will be given in the form of <strong>a+bi</strong>,
        where the integer <strong>a</strong> and <strong>b</strong> will both
        belong to the range of [-100, 100]. And
        <strong>the output should be also in this form</strong>.</li>
</ol>

<hr>
<p>Here is what the code represent:</p>
<h3>Input: "2+-1i", "6+-6i"</h3>

<b>The answer: 
    <?php
    $output = complexNumberMultiplication("2+-1i", "6+-6i");
    if (isset($output) && !empty($output)) {
        print_r($output);
    } else {
        echo 'No output!';
    }
    ?>
</b>
<p>TimeComplexity: O(1)</p>
<hr>
<p>
    <b>Hints: </b><br>
    A good practice for regex.
</p>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/footer.php'; ?>