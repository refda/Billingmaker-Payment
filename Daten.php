<?php
// ZU ERLEDIGEN:
// 1. Ersetzen Sie den API Link durch Ihren eigenen Link, welchen Sie per E-Mail erhalten haben!
// 2. Ersetzen Sie die Werte datum und type nach Belieben.
// 3. Deaktivieren Sie bei Bedarf die SEPA Mail im Benutzeraccount.
$apilink="http://www.beispiel.de/xyz?z=123";
$datum="15.02.2016";
$type="p"; //p=PDF,x=XML
$datei=file_get_contents($apilink."&d=".$datum."&t=".$type."&api=1");

// Hinweis: Täglich um zirka 22:00 werden die PDF-Mandate und SEPA-XML Dateien erstellt, falls Einträge vorhanden sind.
// Ansonsten gibt die API den Statuscode 404 zurück.
