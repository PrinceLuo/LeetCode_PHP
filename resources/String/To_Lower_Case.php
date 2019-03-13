<?php
function toLowerCase($str){
    $input_str = $str;
    $output = strtolower($input_str);
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>To Lower Case</h1>
<h4>Diffculty: Easy</h4>
<p>Implement function ToLowerCase() that has a string parameter str, and returns
    the same string in lowercase.</p>
<h3>Example1:</h3><p><b>Input:</b> "Hello"<br>
    <b>Output:</b> "hello"<br>
    </p>
<h3>Example2:</h3><p><b>Input:</b> "here"<br>
    <b>Output:</b> "here"<br>
    </p>
<h3>Example3:</h3><p><b>Input:</b> "LOVELY"<br>
    <b>Output:</b> "lovely"<br>
    </p>
<hr>
<h3>Hint: </h3>
<p>This question is to help you remind the function strtolower() in PHP. Also 
you could try to do it without any function provided.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: "Hello"</h3>
<strong>The answer: </strong><br>
<?php
$output_num = toLowerCase("Hello");
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>