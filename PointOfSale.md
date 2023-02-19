Möchten Sie Kartenzahlungen annehmen? Dann können Sie dies nun mit einem PC/SC Smartcard/Kartenleser und Billingmaker Payment realisieren!

Einfach das Plugin [für Windows](http://plugin.cardid.org/webcard.msi) oder [für Mac OS X](http://plugin.cardid.org/webcard.dmg) + [Smart Card Services für Mac OS X](http://smartcardservices.macosforge.org/) installieren. 

Danach Chrome bis Version 41** (oder anderen NAPI fähigen Browser) starten und in das Backend von Billingmaker Payment gehen. Dort "Point of Sale" auswählen, Betrag eingeben und Karte einstecken.

Falls Sie diese Möglichkeit in eine Software integrieren möchten, können Sie folgende URL verwenden:
https://payment.billingmaker.com/pos/?i=0&h=XYZ&p=4,99 (0 durch Ihre Händler ID, XYZ durch Ihr Terminal-Passwort und 4,99 durch den Preis ersetzen)

Weitere Informationen erhalten Sie auch [hier](https://payment.billingmaker.com/info/point-of-sale-kartenzahlung).

<sup>Hinweise: Nur mit deutschen Bankkarten möglich. Es werden die gängigsten Bankkarten unterstützt - keine Kreditkarten! Billingmaker Payment generiert IBAN und BIC, diese müssen von Ihnen vor dem Bestätigen überprüft werden. Bitte auch die Unterschrift des Kunden prüfen. Billingmaker Payment übernimmt keine Haftung bei falsch generierten Bankverbindungsdaten.</sup> 

<sup>** Chromium Portable mit NAPI Unterstützung lässt sich bspw. hier bei einem externen Anbieter downloaden: https://www.googleapis.com/download/storage/v1/b/chromium-browser-continuous/o/Win%2F138215%2Fchrome-win32.zip?generation=1&alt=media</sup>
