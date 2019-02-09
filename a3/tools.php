<?php
session_start();
print_r($_POST);

 
if (!empty($_POST)) {
    echo "Hi {$_POST['cust']['name']},<br>";
    echo "It looks like you want to see a movie on {$_POST['movie']['day']} at {$_POST['movie']['hour']}.";
}

function printMyCode() {
  $lines = file($_SERVER['PHP_SELF']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

printMyCode()
    
echo ($_POST['PHP_SELF'])    

$cust[name]=''; 
    
if(!empty ($_POST['submitted'])){
    $cust[name] = trim($_POST['cust[name]']);
    if (empty($cust[name])){
        $name_error='Name must be entered'
    }
}  
    
    
    
    
/*
function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else 
echo $ret; 
}
*/
?>
