<?php
 if(isset($_POST['client_ip'])){
    $data = $_POST['client_ip'];
    error_log(print_r($data,true));
    // error_log('aaaaaa');
    date_default_timezone_set('Asia/Calcutta');
    $date = date('m/d/Y h:i:s a', time());
    $txt = $date." ".$data;
    // $myfile = fopen("ip_log.txt", "wr") or die("Unable to open file!");
    $myfile = file_put_contents('ip_log.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
}
?>