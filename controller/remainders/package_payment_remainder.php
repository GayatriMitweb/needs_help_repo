<?php
include('../model/model.php');
include('../model/remainders/payment_remainders.php');
$baddy_email = new payment_email;
$baddy_email->payment_remainder_notification_send();
?>