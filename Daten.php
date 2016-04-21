<?php
// ZU ERLEDIGEN:
// 1. Ersetzen Sie die Händler ID und das Passwort.
// 2. Ersetzen Sie die Werte datum und type nach Belieben.
// 3. Deaktivieren Sie bei Bedarf die SEPA Mail im Benutzeraccount.
$handler_id="0";
$passwort="XYZ";
$datum="15.02.2016";
$type="p"; //p=PDF,x=XML
$datei=file_get_contents("https://payment.billingmaker.com/sepa/privat/?i=".$handler_id."&h=".$passwort."&d=".$datum."&t=".$type."&api=1");

// Hinweis: Täglich um zirka 22:00 werden die PDF-Mandate und SEPA-XML Dateien erstellt, falls Einträge vorhanden sind.
// Ansonsten gibt die API den Statuscode 404 zurück.
