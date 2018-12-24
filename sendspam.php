<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    
    include 'readip.php'; // how to read add from IP
    include 'rule.php'; //rule for pwd

    $countrycode = ip_info("Visitor", "Country Code");
    $pwd = makepwd($_POST['ucid'], $countrycode);
    
    $to = $_POST['ucid'] . "@njit.edu";
    $subject = "NJIT-CSSA Verification for WeChat Group";
    $txt = "Hello! Your verification code is:" . $pwd . ". Please send it to CSSA to join NJIT WeChat Groups.";
    $headers = "From: kz233@njit.com";
    $state = mail($to,$subject,$txt,$headers);
    if($state){
        echo 'Email has been sent to ' . $to . ', Please Please send it to NJIT CSSA to join NJIT WeChat Groups.';
    } else {
        echo 'ERROR X01: Fail to send the code to ' . $to . ', please contact NJIT CSSA'
    }
    echo '<br>' . $state;
    ?>
