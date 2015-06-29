<?php
$id=$_GET['id'];
$hash=$_GET['hash'];
$json=file_get_contents("https://payment.billingmaker.com/sepa/c/?id=".$id."&hash=".$hash);
$json=json_decode($json, true);
if ($json['name']!='') {

//WEITERE AKKTIONEN

}
