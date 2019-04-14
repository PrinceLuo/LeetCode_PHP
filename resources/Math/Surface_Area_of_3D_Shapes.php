<?php

function surfaceAreaOf3DShapes($arr){
    $length = count($arr);
    $total_value = 0;
    for($i = 0; $i < $length; $i++){
        if($i!=0){
            $sub_length = count($arr[$i]);
            for($j = 0; $j < $sub_length; $j++){
                $min_num = min($arr[$i][$j], $arr[$i - 1][$j]);
                $exsist = $arr[$i][$j]==0?0:1;
                if($j!=0){
                    $sub_min_num = min($arr[$i][$j], $arr[$i][$j - 1]);
                    $total_value += 4 * $arr[$i][$j] - 2 * $sub_min_num - 2 * $min_num + 2*$exsist;
                }else{
                    $total_value += 4 * $arr[$i][$j] - 2 * $min_num + 2*$exsist;
                }
            }
            
        }else{
            $sub_length = count($arr[$i]);
            for($j = 0; $j < $sub_length; $j++){
                $min_num = min($arr[$i][$j], $arr[$i - 1][$j]);
                $exsist = $arr[$i][$j]==0?0:1;
                if($j!=0){
                    $sub_min_num = min($arr[$i][$j], $arr[$i][$j - 1]);
                    $total_value += 4 * $arr[$i][$j] - 2 * $sub_min_num +2*$exsist;
                    
                }else{
                    $total_value += 4 * $arr[$i][$j] + 2*$exsist;
                    
                }
            }
            
        }
        echo $total_value;
    }
    $output = $total_value;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Surface Area of 3D Shapes</h1>
<h4>Diffculty: Easy</h4>
<p>On a N * N grid, we place some 1 * 1 * 1 cubes.</p>
<p>Each value v = grid[i][j] represents a tower of v cubes placed on top of grid
    cell (i, j).</p>
<p>Return the total surface area of the resulting shapes.</p>

<h3>Example1:</h3><p><b>Input:</b> [[2]]<br>
    <b>Output:</b> 10<br>
    
    </p>
<h3>Example2:</h3><p><b>Input:</b> [[1,2],[3,4]]<br>
    <b>Output:</b> 34<br>
    
    </p>
<h3>Example3:</h3><p><b>Input:</b> [[1,0],[0,2]]<br>
    <b>Output:</b> 16<br>
    
    </p>
<h3>Example4:</h3><p><b>Input:</b> [[1,1,1],[1,0,1],[1,1,1]]<br>
    <b>Output:</b> 32<br>
    
    </p>
<h3>Example4:</h3><p><b>Input:</b> [[2,2,2],[2,1,2],[2,2,2]]<br>
    <b>Output:</b> 46<br>
    
    </p>
<h3>Note: </h3><p>
<ul>
    <li>1 <= N <= 50</li>
    <li>0 <= grid[i][j] <= 50</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>When adding a new group of cubes in a new column, you need to minus the
 previous column that duplicated, as well as the previous row.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [[2,2,2],[2,1,2],[2,2,2]]</h3>
<strong>The answer: </strong><br>
<?php

$output_num = surfaceAreaOf3DShapes([[2,2,2],[2,1,2],[2,2,2]]);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n*m)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>