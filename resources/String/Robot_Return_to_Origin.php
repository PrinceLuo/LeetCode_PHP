<?php

function robotReturnToOrigin($str){
    $length = strlen($str);
    $x = 0;
    $y = 0;
    for($i=0; $i<$length; $i++){
        $move = substr($str, $i, 1);
        switch ($move){
            case 'R':
                $x++;
                break;
            case 'U':
                $y++;
                break;
            case 'L':
                $x--;
                break;
            case 'D':
                $y--;
                break;
            default:
                // nothing
        }
    }
    if($x==0&&$y==0){
        $output = 'True';
    }else{
        $output = 'False';
    }
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Robot Return to Origin</h1>
<h4>Diffculty: Easy</h4>
<p>There is a robot starting at position (0, 0), the origin, on a 2D plane.
    Given a sequence of its moves, judge if this robot ends up at (0, 0) after
    it completes its moves.
</p>
<p>The move sequence is represented by a string, and the character moves[i]
    represents its ith move. Valid moves are R (right), L (left), U (up), and D
    (down). If the robot returns to the origin after it finishes all of its
    moves, return true. Otherwise, return false.</p>
<p>[".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."]</p>
<p>Now, given a list of words, each word can be written as a concatenation of
    the Morse code of each letter. For example, "cba" can be written as
    "-.-..--...", (which is the concatenation "-.-." + "-..." + ".-"). We'll
    call such a concatenation, the transformation of a word.</p>
<p>Return the number of different transformations among all words we have.</p>
<h3>Example1:</h3><p><b>Input:</b> "UD"<br>
    <b>Output:</b> true<br>
    <b>Explanation:</b> The robot moves up once, and then down once. All moves
    have the same magnitude, so it ended up at the origin where it started.
    Therefore, we return true.
    </p>
<h3>Example2:</h3><p><b>Input:</b> "LL"<br>
    <b>Output:</b> false<br>
    <b>Explanation:</b> The robot moves left twice. It ends up two "moves" to
    the left of the origin. We return false because it is not at the origin at
    the end of its moves.
    </p>
<h3>Note: </h3><p>
The way that the robot is "facing" is irrelevant. "R" will always make the robot
move to the right once, "L" will always make it move left, etc. Also, assume
that the magnitude of the robot's movement is the same for each move.
</p>
<hr>
<h3>Hint: </h3>
<p>Noting. Skip this.</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: LL</h3>
<strong>The answer: </strong><br>
<?php

$output_num = robotReturnToOrigin('LL');
if (isset($output_num) && !empty($output_num)) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: O(n)</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>