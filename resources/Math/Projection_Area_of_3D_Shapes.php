<?php
$input_grid = [[4,3],[2,1,5],[2,1,5,7]];
$front_v = 0;
$side = [];
$side_v = 0;
$top_v = 0;
foreach ($input_grid as $key_x => $value_g){
    $tmp_x = 0;
    foreach ($value_g as $key_y => $value_gg){
        // get the maximan value in one single X line
        if($value_gg>$tmp_x){
            $tmp_x = $value_gg;
        }
        // take record in every Y line
        if(array_key_exists($key_y, $side)){
            $side[$key_y]<=$value_gg?$side[$key_y]=$value_gg:NULL;
        }else{
            $side[]=$value_gg;
        }
        if($value_gg!=0){
            $top_v++;
        }
    }
    $front_v += $tmp_x;
}
foreach ($side as $value){
    $side_v += $value;
}
$output = $front_v + $side_v + $top_v;
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Self Dividing Numbers</h1>
<h4>Diffculty: Easy</h4>
<p>Q:  On a <font color="red">N * N</font> grid, we place some <font color="red">1 * 1 * 1</font> cubes that are axis-aligned with the x, y, and z axes.<br>
    Each value <font color="red">v = grid[i][j]</font> represents a tower of v cubes placed on top of grid cell <font color="red">(i, j)</font>.<br>
    Now we view the <i>projection</i> of these cubes onto the xy, yz, and zx planes.<br>
    A projection is like a shadow, that maps our 3 dimensional figure to a 2 dimensional plane.<br>
    Here, we are viewing the "shadow" when looking at the cubes from the top, the front, and the side.<br>
    Return the total area of all three projections.</p>
<h3>Example1:</h3><p><b>Input:</b> [[2]]<br>
    <b>Output:</b>5</p>
<h3>Example2:</h3><p><b>Input:</b>[[1,2],[3,4]]<br>
    <b>Output:</b>17</p>
<b>Explanation: </b><p>Here are the three projections ("shadows") of the shape made with each axis-aligned plane.</p>
<img src="/public/img/math/example_pic1.png" width="100%" height="auto"><br>
<h3>Example3:</h3><p><b>Input:</b>[[1,0],[0,2]]<br>
    <b>Output:</b>8</p>
<h3>Example4:</h3><p><b>Input:</b>[[1,1,1],[1,0,1],[1,1,1]]<br>
    <b>Output:</b>14</p>
<h3>Example5:</h3><p><b>Input:</b>[[2,2,2],[2,1,2],[2,2,2]]<br>
    <b>Output:</b>21</p>
<h3>Note: </h3><p>A. <font color="red">1 <= grid.length = grid[0].length <= 50</font>.</p><p>B. <font color="red">0 <= grid[i][j] <= 50</font>.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: </h3>[[4,3],[2,1,5],[2,1,5,7]]<br>
<b>The answer: </b>
<?php
if(isset($output)){
    echo "$output<br>";
}else{
    echo 'No result!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>