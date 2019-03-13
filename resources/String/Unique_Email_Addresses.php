<?php
function uniqueEmailAddresses($arr){
    $input_arr = $arr;
    // domain=>local_name
    $email_addresses = array();
    $email_num = 0;
    foreach($input_arr as $email){
        $extract_arr = explode('@', $email);
        $local_name = $extract_arr[0];
        $domain_name = $extract_arr[1];
        if(array_key_exists($domain_name, $email_addresses)){
            // the '.' and the '+'
            $local_name = preg_replace('/\./', '', $local_name);
            $local_name = preg_replace('/\+\w*$/', '', $local_name);
            if(array_key_exists($local_name, $email_addresses[$domain_name])){
                $email_addresses[$domain_name][$local_name]+=1;
            }else{
                $email_addresses[$domain_name][$local_name] = 1;
                $email_num++;
            }
        }else{
            $email_addresses[$domain_name] = array();
            $local_name = preg_replace('/\./', '', $local_name);
            $local_name = preg_replace('/\+\w*$/', '', $local_name);
            $email_addresses[$domain_name][$local_name] = 1;
            $email_num++;
        }
    }
    $output = $email_num;
    return $output;
}
define('__PUBLIC__', $_SERVER['DOCUMENT_ROOT'].'/public'); 
?>
<?php require_once(__PUBLIC__.'/inc/head.php');  ?>
<h1>Unique Email Addresses</h1>
<h4>Diffculty: Easy</h4>
<p>Every email consists of a local name and a domain name, separated by the @ sign.</p>
<p>For example, in alice@leetcode.com, alice is the local name, and leetcode.com
    is the domain name.</p>
<p>Besides lowercase letters, these emails may contain '.'s or '+'s.</p>
<p>If you add periods ('.') between some characters in the 
    <strong>local name</strong> part of an email address, mail sent there will
    be forwarded to the same address without dots in the local name.  For
    example, "alice.z@leetcode.com" and"alicez@leetcode.com" forward to the same
    email address. (Note that this rule does not apply for domain names.)</p>
<p>If you add a plus ('+') in the <strong>local name</strong>, everything after
    the first plus sign will be <strong>ignored</strong>. This allows certain
    emails to be filtered, for example m.y+name@email.com will be forwarded to
    my@email.com.  (Again, this rule does not apply for domain names.)</p>
<p>It is possible to use both of these rules at the same time.</p>
<p>Given a list of emails, we send one email to each address in the list.  How
    many different addresses actually receive mails? </p>
<h3>Example1:</h3><p><b>Input:</b> ["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]<br>
    <b>Output:</b> 2<br>
    <b>Explanation:</b> "testemail@leetcode.com" and "testemail@lee.tcode.com"
    actually receive mails
    </p>
<h3>Note: </h3><p>
<ul>
    <li>1 <= emails[i].length <= 100</li>
    <li>1 <= emails.length <= 100</li>
    <li>Each emails[i] contains exactly one '@' character.</li>
</ul>
</p>
<hr>
<h3>Hint: </h3>
<p>A very good practice of regex and explode (implode).</p>
<hr>
<p>Here is what the code represent:</p>
<h3>Input: ["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]</h3>
<strong>The answer: </strong><br>
<?php
$output_num = uniqueEmailAddresses(["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]);
if (isset($output_num) && count($output_num) > 0) {
    echo "Output: <br>";
    print_r($output_num);
} else {
    echo 'No output!';
}
?>
<p>TimeComplexity: N</p>

<?php require_once(__PUBLIC__.'/inc/footer.php'); ?>