<?php    
header('Content-Type:application/json; charset=utf-8');

$arr = array('a'=>test_returnCode1,'b'=>test_returnCode2);

exit(json_encode($arr));
    ?>