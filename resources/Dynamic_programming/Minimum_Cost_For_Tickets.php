<?php

function minimumCostForTickets($days_arr,$costs_arr) {
    $length = count($days_arr);
    $start_day = 0;
    for($i = 0; $i<$length; $i++){
        if($start_day==0){
            // initialization
            $gap = 1;
            
        }
        
    }
    $output = $min;
    return $output;
}

define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'] . '/public');
?>
<?php require_once(__PUBLIC__ . '/inc/head.php'); ?>
<h1>Stone Game</h1>
<h4>Diffculty: Medium</h4>
<p>Given a square array of integers A, we want the minimum sum of a falling path
    through A.</p>
<p>A falling path starts at any element in the first row, and chooses one element
    from each row.  The next row's choice must be in a column that is different
    from the previous row's column by at most one.</p>

<h3>Example1:</h3><p><b>Input:</b> [[1,2,3],[4,5,6],[7,8,9]]<br>
    <b>Output:</b> 12<br><br>
    <strong>Explanation: </strong><p>The possible falling paths are:
<ul>
    <li>[1,4,7], [1,4,8], [1,5,7], [1,5,8], [1,5,9]</li>
    <li>[2,4,7], [2,4,8], [2,5,7], [2,5,8], [2,5,9], [2,6,8], [2,6,9]</li>
    <li>[3,5,7], [3,5,8], [3,5,9], [3,6,8], [3,6,9]</li>
</ul>
</p>
The falling path with the smallest sum is [1,4,7], so the answer is 12.
</p>

<h3>Note:</h3><p>
<ol>
    <li>1 <= A.length == A[0].length <= 100</li>
    <li>-100 <= A[i][j] <= 100</li>
</ol>
</p>
<hr>
<h3>Hint: </h3>
<p>
For a single A[i][j], it has a potential value. When i and j getting large, it 
has less cases. So for a N length array A, we calculate the best (minimal) value
of itself from the end of this array.
</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: [[1,2,3],[4,5,6],[7,8,9]]</h3>
<strong>The answer: </strong><br>
<?php
$output_num = minimumCostForTickets([1,4,6,7,8,20], [2,7,15]);
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n^2)</p>

<?php require_once(__PUBLIC__ . '/inc/footer.php'); ?>