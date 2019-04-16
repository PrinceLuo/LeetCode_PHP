<?php

function flippingAnImage($arr){
    $output = [];
    foreach ($arr as $subarr) {
        $output_sub = [];
        $reverse_arr = array_reverse($subarr);
        foreach ($reverse_arr as $value){
            $output_sub[] = $value ^ 1;
        }
        $output[] = $output_sub;
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Flipping an Image</h1>
<h4>Diffculty: Easy</h4>
<p>Given a binary matrix A, we want to flip the image horizontally, then invert
    it, and return the resulting image.</p>
<p>To flip an image horizontally means that each row of the image is reversed. 
    For example, flipping [1, 1, 0] horizontally results in [0, 1, 1].</p>
<p>To invert an image means that each 0 is replaced by 1, and each 1 is replaced
    by 0. For example, inverting [0, 1, 1] results in [1, 0, 0].</p>

<h3>Example1:</h3><p><b>Input:</b> [[1,1,0],[1,0,1],[0,0,0]]<br>
    <b>Output:</b> [[1,0,0],[0,1,0],[1,1,1]]<br>
    <b>Explanation:</b>First reverse each row: [[0,1,1],[1,0,1],[0,0,0]].
Then, invert the image: [[1,0,0],[0,1,0],[1,1,1]]
    </p>
<h3>Example2:</h3><p><b>Input:</b> [[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]]<br>
    <b>Output:</b> [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]]<br>
    <b>Explanation:</b>First reverse each row: [[0,0,1,1],[1,0,0,1],[1,1,1,0],[0,1,0,1]].
Then invert the image: [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]]
    </p>

<h3>Note: </h3><p>
<ul>
    <li>1 <= A.length = A[0].length <= 20</li>
    <li>0 <= A[i][j] <= 1</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p></p>
<p></p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [[1,1,0],[1,0,1],[0,0,0]]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = flippingAnImage([[1,1,0],[1,0,1],[0,0,0]]);
if (isset($output_num) && count($output_num)>0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>