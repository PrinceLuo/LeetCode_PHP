<?php
function spiralMatrix3($str1, $str2){
    
    return $output;
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/head.php';
?>
<h1>Spiral Matrix III</h1>
<h4>Diffculty: Medium</h4>
<p>On a 2 dimensional grid with R rows and C columns, we start at (r0, c0) facing east.</p>
<p>Here, the north-west corner of the grid is at the first row and column, and
    the south-east corner of the grid is at the last row and column.</p>
<p>Now, we walk in a clockwise spiral shape to visit every position in this grid. </p>
<p>Whenever we would move outside the boundary of the grid, we continue our walk
    outside the grid (but may return to the grid boundary later.)</p>
<p>Eventually, we reach all R * C spaces of the grid.</p>
<p>Return a list of coordinates representing the positions of the grid in the
    order they were visited.</p>

<h3>Example1:</h3><p><strong>Input:</strong> R = 1, C = 4, r0 = 0, c0 = 0<br>
    <strong>Output:</strong> [[0,0],[0,1],[0,2],[0,3]]
</p>
<h3>Example2:</h3><p><strong>Input:</strong> R = 5, C = 6, r0 = 1, c0 = 4<br>
    <strong>Output:</strong> [[1,4],[1,5],[2,5],[2,4],[2,3],[1,3],[0,3],[0,4],
    [0,5],[3,5],[3,4],[3,3],[3,2],[2,2],[1,2],[0,2],[4,5],[4,4],[4,3],[4,2],
    [4,1],[3,1],[2,1],[1,1],[0,1],[4,0],[3,0],[2,0],[1,0],[0,0]]<br>
</p>
<h3>Note:</h3>
<ol>
    <li>1 <= R <= 100</li>
    <li>1 <= C <= 100</li>
    <li>0 <= r0 < R</li>
    <li>0 <= c0 < C</li>
</ol>

<hr>
<p>Here is what the code represent:</p>
<h3>Input: "2+-1i", "6+-6i"</h3>

<b>The answer: 
    <?php
    $output = complexNumberMultiplication("2+-1i", "6+-6i");
    if (isset($output) && !empty($output)) {
        print_r($output);
    } else {
        echo 'No output!';
    }
    ?>
</b>
<p>TimeComplexity: O(1)</p>
<hr>
<p>
    <b>Hints: </b><br>
    A good practice for regex.
</p>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/inc/footer.php'; ?>