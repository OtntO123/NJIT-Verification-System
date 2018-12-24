<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    
    include 'readip.php'; // how to read add from IP
    include 'rule.php'; //rule for pwd
    
    $countrycode = ip_info("Visitor", "Country Code");
    $pwd = makepwd($_POST['ucid'], $countrycode);
    
    $to = $_POST['ucid'] . "@njit.edu";
    $subject = "NJIT-CSSA Verification for WeChat Group";
    $txt = "Hello! Your verification code is:" . $pwd . ". Please send it back to CSSA to join NJIT WeChat Groups. \r\n \r\n \r\nThis is a test message. If you are being borthered by these emails, please forward it to kz233@njit.edu and we will solve it.";
    $headers = "From: CSSA@njit.com";
    $state = mail($to,$subject,$txt,$headers);
    if($state){
        echo 'Your verification code has been sent to ' . $to . '\'s Junk Box, Please send it back to NJIT CSSA to join NJIT WeChat Groups.';
    } else {
        echo 'ERROR X01: Fail to send the code to ' . $to . ', please contact NJIT CSSA';
    }
    echo '<br>' . $state;
    ?>
