<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$input = 'IIDII'; // 015234
$length = strlen($input);
$max = $length;
$min = 0;
$arr = str_split($input);
for($i = 0; $i < $length; $i++){
    if($arr[$i]==='I'){
        // minimum
        $output[] = $min;
        $min++;
    }else if($arr[$i]==='D'){
        $output[] = $max;
        $max--;
    }
}
$output[] = $min;
?>
<?php require_once(__PUBLIC__ . '/inc/head.php'); ?>
<h1>DI String Match</h1>
<h4>Diffculty: Easy</h4>
<p>Q:  Given a string S that <b>only</b> contains "I" (increase) or "D" (decrease), let N = S.length.
    Return <b>any</b> permutation A of [0, 1, ..., N] such that for all i = 0, ..., N-1:<br>
    1. If S[i] == "I", then A[i] < A[i+1]<br>
    2. If S[i] == "D", then A[i] > A[i+1]<br>
<h3>Example1:</h3><p><b>Input:</b>"IDID"<br>
    <b>Output:</b>[0,4,1,3,2]</p>
<h3>Example2:</h3><p><b>Input:</b>"III"<br>
    <b>Output:</b>[0,1,2,3]</p>
<h3>Example3:</h3><p><b>Input:</b>"DDI"<br>
    <b>Output:</b>[3,2,0,1]</p>
<b>Note: </b><p>1. 1 <= S.length <= 10000<br>
    2. S only contains characters "I" or "D".<br>
</p>

<p>Here is what the code represent:</p>
<h3>Input: "IIDII"</h3><br>
<b>The answer: </b>
<?php
if (isset($output)) {
    echo "[";
    for($j = 0; $j <= $length; $j++){
        if($j===$length){
            echo $output[$j];
        } else {
            echo $output[$j].", ";
        }
    }
    echo "]";
    echo "<br>";
} else {
    echo 'No result!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__ . '/inc/footer.php'); ?>