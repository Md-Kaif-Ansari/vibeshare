<?php

$url = $_SERVER['REQUEST_URI'];
$urlArr = explode('/',$url);
$route = '';
if (strpos($urlArr[1],'?')) {
  $urlNew = explode('?',$urlArr[1]);
  $route = $urlNew[0];
}
else {
  $route = $urlArr[1];
}

switch ($route) {
  case '':
    require './View/login.view.php';
    break;
  case 'Login':
    require './View/login.view.php';
    break;
  case 'Registration':
    require './View/Registration.php';
    break;
  case 'ForgetPassword':
    require './View/ForgetPassword.php';
    break;
  case 'resetpassword':
    require './View/resetPassword.php';
    break;
  case 'Message':
    require './View/registerMessage.php';
    break;
  case 'Dashboard':
    require './View/Dashboard.php';
    break;
  case 'Profile':
    require './View/Profile.php';
    break;
  case 'Addpost':
    require './View/Addpost.php';
    break;
  case 'EditProfile':
    require './View/editProfile.php';
    break;
  case '403':
    require './View/page_403.php';
    break;
  default:
    require './View/login.view.php';
}
?>
