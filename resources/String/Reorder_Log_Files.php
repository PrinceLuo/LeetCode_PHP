<?php

function reorderLogFiles($arr){
    $letter_logs = [];
    $digit_logs = [];
    $le_arr = [];
    foreach ($arr as $value){
        $values_arr = explode(" ", $value);
        if(is_numeric($values_arr[1])){
            $digit_logs[] = $value ;
        }else if(is_string($values_arr[1])){
            $letter_logs[] = $value;
            array_shift($values_arr);
            $str = implode(' ', $values_arr);
            $le_arr[] = $str;
        }
    }
    asort($le_arr);
    $new_letters_log = [];
    foreach ($le_arr as $k=>$v){
        $new_letters_log[] = $letter_logs[$k];
    }
    $output = array_merge($new_letters_log, $digit_logs);
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Reorder Log Files</h1>
<h4>Diffculty: Easy</h4>
<p>You have an array of logs.  Each log is a space delimited string of words.
</p>
<p>For each log, the first word in each log is an alphanumeric <i>identifier</i>.  Then, either:
<ul>
    <li>Each word after the identifier will consist only of lowercase letters, or;</li>
    <li>Each word after the identifier will consist only of digits.</li>
</ul>
</p>
<p>We will call these two varieties of logs <i>letter-logs</i> and <i>digit-logs</i>. 
    It is guaranteed that each log has at least one word after its identifier.
</p>
<p>Reorder the logs so that all of the letter-logs come before any digit-log. 
    The letter-logs are ordered lexicographically ignoring identifier, with the 
    identifier used in case of ties.  The digit-logs should be put in their original order.
</p>
<p>Return the final order of the logs.
</p>
<h3>Example1:</h3><p><b>Input:</b> ["a1 9 2 3 1","g1 act car","zo4 4 7","ab1 off key dog","a8 act zoo"]<br>
    <b>Output:</b> ["g1 act car","a8 act zoo","ab1 off key dog","a1 9 2 3 1","zo4 4 7"]<br>
    </p>

<h3>Note: </h3><p>
<ol>
    <li>0 <= logs.length <= 100</li>
    <li>3 <= logs[i].length <= 100</li>
    <li>logs[i] is guaranteed to have an identifier, and a word after the identifier.</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>Have a review of PHP sort family.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: ["a1 9 2 3 1","g1 act car","zo4 4 7","ab1 off key dog","a8 act zoo"]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = reorderLogFiles(["a1 9 2 3 1","g1 act car","zo4 4 7","ab1 off key dog","a8 act zoo"]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>