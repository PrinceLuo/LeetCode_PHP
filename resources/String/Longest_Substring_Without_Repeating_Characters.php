<?php

function longestSubstringWithoutRepeatingCharacters($str){
    $length = strlen($str);
    $letter_appear = array();
    $max_len = 1;
    $len_record = 0;
    for($i = 0; $i<$length; $i++){
        $cur_letter = substr($str, $i, 1);
        if(array_key_exists($cur_letter, $letter_appear)){
            $max_len = $max_len>$len_record?$max_len:$len_record;
            $len_record = 1;
            $letter_appear = [];
            $letter_appear[$cur_letter] = 1;
        }else{
            $letter_appear[$cur_letter] = 1;
            $len_record++;
        }
    }
    $output = $max_len;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Longest Substring Without Repeating Characters</h1>
<h4>Diffculty: Medium</h4>
<p>Given a string, find the length of the <strong>longest substring</strong>
    without repeating characters.
</p>

<h3>Example1:</h3><p><b>Input:</b> "abcabcbb"<br>
    <b>Output:</b> 3<br>
    <b>Explanation:</b> The answer is "abc", with the length of 3.
    </p>
<h3>Example2:</h3><p><b>Input:</b> "bbbbb"<br>
    <b>Output:</b> 1<br>
    <b>Explanation:</b> The answer is "b", with the length of 1.
    </p>
<h3>Example3:</h3><p><b>Input:</b> "pwwkew"<br>
    <b>Output:</b> 3<br>
    <b>Explanation:</b> The answer is "wke", with the length of 3. 
    Note that the answer must be a <strong>substring</strong>, "pwke" is a
    subsequence and not a substring.
    </p>
<h3>Note: </h3><p>

</p>
<hr>
<h3>Hint: </h3>
<p>Just pay attention to the current length, and the letter recorded.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: "pwwkew"</h3>
<strong>The answer: </strong><br>
<?php

$output_num = longestSubstringWithoutRepeatingCharacters("pwwkew");
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>