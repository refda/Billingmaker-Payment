<?php
$id=$_GET['id'];
$hash=$_GET['hash'];
$json=file_get_contents("https://payment.billingmaker.com/sepa/c/?id=".$id."&hash=".$hash);
$json=json_decode($json, true);
if ($json['name']!='') {

//WEITERE AKKTIONEN

}

/* JSON Objekt, welches zurückgegeben wird.

{
  "name": "Vorname Nachname",
  "iban": "DE00000000000000000000",
  "ip": "0.0.0.0",
  "datum": "2016-01-20 21:36:26",
  "bezeichnung": "Rechnung 121",
  "modus": "1",
  "preis": "0,72",
  "c": "custom-parameter",
  "kstr": "Straße 12",
  "kort": "11111 Musterstadt",
  "ema": "mail@example.com"
  "method": "0" //0=Lastschrift, 1=PayPal, 2=Kreditkarte, 3=Überweisung
}

*/
