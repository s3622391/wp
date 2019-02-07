<?php
  session_start();

function preShow( $arr, $returnAsString=false ) {
$ret = '<pre>' . print_r($arr, true) . '</pre>';
if ($returnAsString)
return $ret;
else 
echo $ret; 
}

?>