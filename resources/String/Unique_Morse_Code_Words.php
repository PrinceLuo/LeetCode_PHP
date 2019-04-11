<?php

function uniqueMorseCodeWords($arr){
    
    $morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $morseKey = [];
    for($i=0; $i<26;$i++){
        $morseKey[$alphabet[$i]] = $morse[$i];
    }
    $morseCheck = [];
    foreach ($arr as $word){
        $word_len = strlen($word);
        $morseWord = '';
        for($j=0;$j<$word_len;$j++){
            $letter = substr($word, $j, 1);
            $morseWord .= $morseKey[$letter];
        }
        if(array_key_exists($morseWord, $morseCheck)){
            $morseCheck[$morseWord] += 1;
        }else{
            $morseCheck[$morseWord] = 1;
        }
    }
    $output = count($morseCheck);
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Unique Morse Code Words</h1>
<h4>Diffculty: Easy</h4>
<p>International Morse Code defines a standard encoding where each letter is
    mapped to a series of dots and dashes, as follows: "a" maps to ".-", "b"
    maps to "-...", "c" maps to "-.-.", and so on.</p>
<p>For convenience, the full table for the 26 letters of the English alphabet
    is given below:</p>
<p>[".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."]</p>
<p>Now, given a list of words, each word can be written as a concatenation of
    the Morse code of each letter. For example, "cba" can be written as
    "-.-..--...", (which is the concatenation "-.-." + "-..." + ".-"). We'll
    call such a concatenation, the transformation of a word.</p>
<p>Return the number of different transformations among all words we have.</p>
<h3>Example1:</h3><p><b>Input:</b> words = ["gin", "zen", "gig", "msg"]<br>
    <b>Output:</b> 2<br>
    <b>Explanation:</b> The transformation of each word is:<br>
"gin" -> "--...-."<br>
"zen" -> "--...-."<br>
"gig" -> "--...--."<br>
"msg" -> "--...--."<br>

There are 2 different transformations, "--...-." and "--...--.".
    </p>
<h3>Note: </h3><p>
<ul>
    <li>The length of words will be at most 100.</li>
    <li>Each words[i] will have length in range [1, 12].</li>
    <li>words[i] will only consist of lowercase letters.</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>Functions needed in PHP: array_key_exists($key, $array), strsplit($string, $split_length=1),
substr($string, $start, $length=null)</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: Words = ["gin", "zen", "gig", "msg"]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = uniqueMorseCodeWords(["gin", "zen", "gig", "msg"]);
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n*m)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>