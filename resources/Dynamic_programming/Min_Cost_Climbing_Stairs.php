<?php
$doc_public = $_SERVER['DOCUMENT_ROOT'].'/public';

$arr = [1, 100, 1, 1, 1, 100, 1, 1, 100, 1];

// index 0
$score0 = 0;
$score1 = 0;
for($i = 0; $i<=count($arr);){
//    echo $score0."&".$i."<br>";
    if($i<1){
        $score0 += $arr[$i];
        $i+=2;
    }else{
        if($i == count($arr)){
                $score0 += $arr[$i-1];
                $i+=2;
        }else{
            if($arr[$i-1]<$arr[$i]){
                $score0 += $arr[$i-1];
                $i+=1;
            }else{
                $score0 += $arr[$i];
                $i+=2;
            }
        }
    }
}
if(count($arr)>1){
    for($i = 1; $i<=count($arr); ){
//        echo $score1."&".$i."<br>";
        if($i<2){
            $score1 += $arr[$i];
            $i+=2;
        }else{
            if($i == count($arr)){
                    $score1 += $arr[$i-1];
                    $i+=2;
            }else{
                if($arr[$i-1]<$arr[$i]){
                    $score1 += $arr[$i-1];
                    $i+=1;
                }else{
                    $score1 += $arr[$i];
                    $i+=2;
                }
            }
        }
    }
}
//echo $score0."<br>";
//echo $score1."<br>";
//$score0<$score1?print_r($score0): print_r($score1);
?>
<?php require_once $doc_public.'/inc/head.php'; ?>
<h1>Min Cost Climbing Stairs</h1>
<h4>Diffculty: Easy</h4>
<p>Q:  On a staircase, the i-th step has some non-negative cost cost[i] assigned (0 indexed).<br>
    Once you pay the cost, you can either climb one or two steps. You need to find
    minimum cost to reach the top of the floor, and you can either start from the
    step with index 0, or the step with index 1. </p>
<h3>Example1:</h3><p>Input: cost = [10, 15, 20]<br>
    Output: 15<br>
    Explanation: Cheapest is start on cost[1], pay that cost and go to the top.</p>
<h3>Example2: </h3><p>Input: cost = [1, 100, 1, 1, 1, 100, 1, 1, 100, 1]<br>
    Output: 6<br>
    Explanation: Cheapest is start on cost[0], and only step on 1s, skipping cost[3].</p>
<h3>Note: </h3><p>1. cost will have a length in the range [2, 1000].<br>
    2. Every cost[i] will be an integer in the range [0, 999].
</p>
<hr>
        <p>Here is what the code represent:</p>
        <h3>Input: cost = [1, 100, 1, 1, 1, 100, 1, 1, 100, 1]</h3>
        <b>The answer: </b>
            <?php
            if($score0<$score1) {
                echo "Output: $score0<br>";
                echo 'Cheapest is start on cost[0].';
            }elseif($score0>$score1){
                echo "Output: $score1<br>";
                echo 'Cheapest is start on cost[1].';
            }else{
                echo "Output: $score0<br>";
                echo 'Starting from cost[0] or cost[1] has the same cost.';
            }
            
            ?>
        <p>TimeComplexity: 2n </p>
<?php require_once $doc_public.'/inc/footer.php'; ?>