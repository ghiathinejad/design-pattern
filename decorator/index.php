<?php
ini_set('display_errors' , 1);
/*
require_once 'Email.php';
require_once 'YaldaEmailBody.php';
$email = new Email();
$email = new YaldaEmailBody($email);
$email->loadBody();
//--out--
//This is the extra content for Yalda.
//This is the main Email body. */

/*
require_once 'Email.php';
require_once 'NewYearEmailBody.php';
$email = new Email();
$email = new NewYearEmailBody($email);
$email->loadBody();
//--out--
//This is the extra content for the New Year.
//This is the main Email body.*/

require_once 'Email.php';
require_once 'YaldaEmailBody.php';
require_once 'NewYearEmailBody.php';
$email = new Email();
$email = new YaldaEmailBody($email);
$email = new NewYearEmailBody($email);
$email->loadBody();
//--out--
//This is the extra content for the New Year.
//This is the extra content for Yalda.
//This is the main Email body.