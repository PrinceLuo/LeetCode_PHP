<?php

class Encode_and_Decode_TinyURL {

    function __construct() {
        $url2code = array();
        $code2url = array();
    }
            
    function encodeLongURL($longUrl) {
        $input_url = $longUrl;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        mt_srand(10000000 * (double) microtime());
        for ($i = 0, $str = '', $lc = strlen($chars) - 1; $i < $len; $i++) {
            $str .= $chars[mt_rand(0, $lc)];
        }
        if(!array_key_exists($input_url, $this->url2code)){
            $this->url2code[$input_url] = $str;
            $this->code2url[$str] = $input_url;
        }
        return 'http://tinyurl.com/'.$str;
    }
    
    function decodeLongTinyURL($shortURL){
        $input_url = $shortURL;
        if(array_key_exists($input_url, $this->code2url)){
            return $this->code2url[$input_url];
        }else{
            return "No such short url exists!";
        }
    }
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/head.php';
?>
<h1>Encode and Decode TinyURL</h1>
<h4>Diffculty: Medium</h4>
<p>Note: This is a companion problem to the System Design problem: Design TinyURL.</p><hr>

<p>TinyURL is a URL shortening service where you enter a URL such as
    https://leetcode.com/problems/design-tinyurl and it returns a short URL
    such as http://tinyurl.com/4e9iAk.</p>
<p>Design the encode and decode methods for the TinyURL service. There is no
    restriction on how your encode/decode algorithm should work. You just need
    to ensure that a URL can be encoded to a tiny URL and the tiny URL can be
    decoded to the original URL.</p>
<h3>Example1:</h3><p><strong>Input:</strong> [3,2,4,1]<br>
    <strong>Output:</strong> [4,2,4,3]<br>
    <strong>Explanation:</strong> We perform 4 pancake flips, with k values 4, 2, 4, and 3.
    Starting state: A = [3, 2, 4, 1]
    After 1st flip (k=4): A = [1, 4, 2, 3]
    After 2nd flip (k=2): A = [4, 1, 2, 3]
    After 3rd flip (k=4): A = [3, 2, 1, 4]
    After 4th flip (k=3): A = [1, 2, 3, 4], which is sorted. 
</p>
<h3>Example2:</h3><p><strong>Input:</strong> [1,2,3]<br>
    <strong>Output:</strong> []<br>
    <strong>Explanation:</strong> The input is already sorted, so there is no need to flip anything.
    Note that other answers, such as [3, 3], would also be accepted.
</p>
<br>
<h3>Note:</h3>
<ol>
    <li>1 <= A.length <= 100</li>
    <li>A[i] is a permutation of [1, 2, ..., A.length]</li>
</ol>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [3, 2, 4, 1]</h3>

<b>The answer: 
    <?php
    $obj = new Encode_and_Decode_TinyURL();
    $output = $obj->encodeLongURL("https://leetcode.com/problems/design-tinyurl");
    if (isset($output) && !empty($output)) {
        print_r($output);
    } else {
        echo 'No output!';
    }
    $rev = $obj->decodeLongTinyURL($output);
        echo "<br>".$rev;
    
    ?>
</b>
<p>TimeComplexity: O(n^2)</p>
<hr>
<p>
    <b>Hints: </b><br>
    The tricky part is to create an algorithm to represent the k length reverse
</p>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/footer.php'; ?>