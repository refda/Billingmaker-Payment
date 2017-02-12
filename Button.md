Erstellen Sie einen Zahlungsbutton. Dafür können Sie das folgende Beispiel übernehmen. Achtung: Alle Werte müssen angepasst werden.
```html
<form action="https://payment.billingmaker.com/sepa/" method="post">
	<input type="hidden" name="h" value="1" />
	<input type="hidden" name="b" value="Test" />
	<input type="hidden" name="p" value="1,99" />
	<input type="hidden" name="m" value="1" />
	<input type="hidden" name="c" value="ID34" />
	<input type="hidden" name="bild" value="www.example.com/briefklicktop.png" />
	<input type="hidden" name="favicon" value="www.example.com/favicon.ico" />
	<input type="hidden" name="rurl" value="http://www.example.com/rurl" />
	<input type="hidden" name="nurl" value="http://www.example.com/nurl" />
	<input type="hidden" name="aa" value="0" />
	<input type="hidden" name="em" value="0" />
	<input type="hidden" name="lang" value="de" />
	<input type="hidden" name="pre_name" value="Max Mustermann" />
	<input type="hidden" name="pre_str" value="Musterstraße 405" />
	<input type="hidden" name="pre_ort" value="45654 Musterstadt, Germany" />
	<input type="hidden" name="pre_email" value="kunde@example.com" />
	<input type="hidden" name="pre_iban" value="DE00000000000000000000" />
	<input type="hidden" name="methods" value="dd,pp,cc,uu,pd" />
	<input type="submit" class="btn-bpay" value="Jetzt zahlen" name="submit" />
</form>
<style>.btn-bpay{color:#fff;background-color:#337ab7;border-color:#2e6da4;padding:6px 12px;margin-bottom:2px;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;border:1px solid transparent;border-radius:4px;}</style><iframe allowtransparency="true" src="//payment.billingmaker.com/btn?methods=sepa" scrolling="no" height="25" width="40" frameborder="no" ></iframe>
```
Erläuterung der Werte:

| Wert  | Beschreibung | Pflichtfeld |
| ------------- | ------------- | ------------- |
| h  | Ihre Händler-ID  | Ja |
| b  | Bezeichnung  | Ja |
| p  | Preis im Format 1,99  | Nein, dann wählbar |
| m  | Modus (1=einmalig, 2=monatlich, 3=jährlich)  | Nein, dann wählbar |
| c  | Individuelle Zuordnung für Ihr System  | Nein |
| bild  | Bild-URL (ohne http) | Nein |
| favicon  | Favicon-URL (ohne http)  | Nein |
| rurl  | Zurückleitungs-URL (mit http)  | Nein |
| nurl  | Benachrichtigungs-URL (mit http)  | Nein |
| aa  | AdressAbfrage (kann später ausgelesen werden, 1=ein)  | Nein |
| em  | EmailAbfrage (kann später ausgelesen werden, 1=ein)  | Nein |
| lang  | Sprache (de=Deutsch, en=Englisch)  | Nein, dann Deutsch |
| pre_name  | Name hinterlegen  | Nein |
| pre_str  | Straße/Hausnummer hinterlegen  | Nein |
| pre_ort  | PLZ/Ort/Land hinterlegen  | Nein |
| pre_email  | Email hinterlegen  | Nein |
| pre_iban  | IBAN hinterlegen  | Nein |
| methods  | Zahlungsmethoden (kommasepariert; dd=Lastschrift, cc=Kreditkarte, pp=PayPal, uu=Überweisung, pd=paydirekt, so=SOFORT, gp=Giropay)  | Nein, dann dd |

Falls Sie einzelne Felder nicht nutzen wollen, müssen Sie die gesamte Zeile löschen. Dies ist nur möglich bei optionalen Feldern.
Die Hinterlegungsfelder (Prefill) pre_str, pre_ort und pre_email werden versteckt übergeben, falls aa bzw. em deaktiviert sind.

Im Button kann der Text "Jetzt zahlen" individuell angepasst werden. Der ```<style>``` Tag kann für den Button angepasst oder entfernt werden. Gleiches gilt für den ```<iframe>``` Tag. Dieser ist zum Anzeigen von Logos gedacht. Folgende Parameter können kommasepariert angehängt werden: sofort,giropay,paydirekt,paypal,sepa,mastercard,visa,american-express,discover,bank-transfer. Die Breite muss je nach Anzahl der Logos (n) ausgerechnet werden: 40+44*(n-1)
