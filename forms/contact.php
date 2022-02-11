<?php
  mail(
    'konrad.schewe@outlook.de',                           // to
    'konrad-schewe.de - '.$_POST['subject'],              // subject
    $_POST['message'],                                    // message
    'From: '.$_POST['name'].' <'.$_POST['email'].'>'      // Headers
  );
?>
