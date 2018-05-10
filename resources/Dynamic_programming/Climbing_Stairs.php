<?php $doc_public = $_SERVER['DOCUMENT_ROOT'] . '/public'; ?>
<?php
function one_two($n){
    if($n<0){
        return 0;
    }else if($n==0||$n==1){
        return 1;
    }else if($n>=2){
        return one_two($n-2)+one_two($n-1);
    }
}
$input = 5;
$easy_understand_output = one_two($input);
$light_weight = 1;
$heavy_weight = 2;
if($input<=2){
    $math_output = $input;
}else{
    for($i = 3; $i<=$input; $i++){
        $sum = $heavy_weight+$light_weight;
        $light_weight= $heavy_weight;
        $heavy_weight = $sum;
    }
    $math_output = $sum;
}
?>
<?php require_once $doc_public . '/inc/head.php'; ?>
<p>You are climbing a stair case. It takes n steps to reach to the top.<br>
    Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?<br>
    <b>Note:</b> Given n will be a positive integer.</p>
<h3>Example1:</h3><p>Input: 2<br>
    Output: 2<br>
    Explanation: There are two ways to climb to the top.<br>
    1. 1 step + 1 step<br>
    2. 2 steps
</p>
<h3>Example2: </h3><p>Input: 3<br>
    Output: 3<br>
    Explanation: There are three ways to climb to the top.<br>
    1. 1 step + 1 step + 1 step<br>
    2. 1 step + 2 steps<br>
    3. 2 steps + 1 step
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: 5</h3>

<b>The answer: <?php
if(isset($math_output)&&!empty($math_output)){
    echo $math_output;
}
?>
</b>
<p>TimeComplexity: n</p>
<?php require_once $doc_public . '/inc/footer.php'; ?>