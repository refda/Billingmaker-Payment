<?php
// ZU ERLEDIGEN:
// 1. Ersetzen Sie die Händler ID und das Passwort.
// 2. Ersetzen Sie die ID des zu löschenden Vorganges. Die ID haben Sie zuvor über die programmgesteuerte Benachrichtigung erhalten.
$handler_id="0";
$passwort="XYZ";
$idvorgang=11;
file_get_contents("https://payment.billingmaker.com/sepa/privat/?i=".$handler_id."&h=".$passwort."&del=".$idvorgang."&api=1");
