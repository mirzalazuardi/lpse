<?php
  include_once 'cek_session_user.php';

  session_unset();
  session_destroy();
  header('Location: http://'.$_SERVER['SERVER_NAME'].'/login');
?>