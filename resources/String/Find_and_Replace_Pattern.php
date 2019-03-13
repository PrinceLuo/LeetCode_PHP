<?php

function findAndReplacePattern($arr, $pattern){
    $input_arr = $arr;
    $input_p = $pattern;
    $pattern_arr = str_split($pattern);
    $output = array();
    foreach($input_arr as $word){
        $word_arr = str_split($word);
        $isMatch = TRUE;
        if(count($word_arr)==count($pattern_arr)){
            $mapping = array();
            $counter_mapping = array();
            for($i=0; $i<count($word_arr);$i++){
                if(array_key_exists($pattern_arr[$i], $mapping)){
                    if($mapping[$pattern_arr[$i]] !=$word_arr[$i]){
                        $isMatch = FALSE;
                        break;
                    }
                }else{
                    if(array_key_exists($word_arr[$i], $counter_mapping)){
                        $isMatch = FALSE;
                        break;
                    }
                    $mapping[$pattern_arr[$i]] =$word_arr[$i];
                    $counter_mapping[$word_arr[$i]] = $pattern_arr[$i];
                }
            } 
        }
        if($isMatch){
            $output[] = $word;
        }
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Smallest Range I</h1>
<h4>Diffculty: Medium</h4>
<p>You have a list of words and a pattern, and you want to know which words in
    words matches the pattern.</p>
<p>A word matches the pattern if there exists a permutation of letters p so that
    after replacing every letter x in the pattern with p(x), we get the desired word.</p>
<p>(Recall that a permutation of letters is a bijection from letters to letters:
    every letter maps to another letter, and no two letters map to the same letter.)</p>
<p>Return a list of the words in words that match the given pattern. </p>
<p>You may return the answer in any order. </p>
<h3>Example1:</h3><p><b>Input:</b> words = ["abc","deq","mee","aqq","dkd","ccc"], pattern = "abb"<br>
    <b>Output:</b> ["mee","aqq"]<br>
    <b>Explanation:</b> "mee" matches the pattern because there is a permutation {a -> m, b -> e, ...}. 
"ccc" does not match the pattern because {a -> c, b -> c, ...} is not a permutation,
since a and b map to the same letter.
    </p>
<h3>Note: </h3><p>
<ul>
    <li>1 <= words.length <= 50</li>
    <li>1 <= pattern.length = words[i].length <= 20</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>Functions needed in PHP: array_key_exists($key, $array), strsplit($string, $split_length=1),
substr($string, $start, $length=null)</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: Words = ["abc","deq","mee","aqq","dkd","ccc"], pattern = "abb"</h3>
<strong>The answer: </strong><br>
<?php
$output_num = findAndReplacePattern(["abc","deq","mee","aqq","dkd","ccc"],'abb');
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n*m)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>