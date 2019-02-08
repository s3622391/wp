<?php
session_start();
print_r($_POST);

 
if (!empty($_POST)) {
    echo "Hi {$_POST['cust']['name']},<br>";
    echo "It looks like you want to see a movie on {$_POST['movie']['day']} at {$_POST['movie']['hour']}.";
}


function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else 
echo $ret; 
}

?>
