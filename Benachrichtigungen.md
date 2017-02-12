Falls Sie über eine Zahlung benachrichtigt werden möchten bzw. Ihr System davon in Kenntnis setzen möchten,
können Sie die maschinenlesbare Benachrichtigungsfunktion von Billingmaker Payment nutzen:

Übergeben Sie den Parameter nurl mit einer auf Ihrem Server befindlichen Adresse.
Beispiel: http://www.meinshopbeispiel.de/bp.php

Die URL wird dann bei einer erfolgreichen Zahlung von Billingmaker Payment aufgerufen. Dabei werden die Parameter id, hash und c per GET übergeben.
Damit können Sie den Vorgang verifizieren.

Rufen Sie dazu diese URL beispielsweise mit CURL auf: https://payment.billingmaker.com/sepa/c/
Die GET Parameter id und hash müssen übergeben werden. Sie erhalten dann eine Antwort im JSON Format mit weiteren Informationen. Wir empfehlen, unter anderem den Betrag mit Ihrem System abzugleichen und die ID nach einmaligem Abgleich zu deaktivieren.
Ein Beispiel, wie eine Verifizierung in PHP aussehen könnte:
**[Beispiel Überprüfung](Überprüfung.php)**
