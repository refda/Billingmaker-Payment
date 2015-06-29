Erstellen Sie einen Zahlungsbutton. Dafür können Sie das folgende Beispiel übernehmen. Achtung: Alle Werte müssen angepasst werden.
```html
<form action="https://payment.billingmaker.com/sepa/" method="post">
	<input type="hidden" name="h" value="1" />
	<input type="hidden" name="p" value="1,99" />
	<input type="hidden" name="m" value="1" />
	<input type="hidden" name="b" value="Test" />
	<input type="hidden" name="c" value="ID34" />
	<input type="hidden" name="bild" value="www.briefklick.de/briefklicktop.png" />
	<input type="hidden" name="favicon" value="www.briefklick.de/favicon.ico" />
	<input type="hidden" name="rurl" value="http://www.briefklick.de/rurl" />
	<input type="hidden" name="nurl" value="http://www.briefklick.de/nurl" />
	<input type="hidden" name="aa" value="0" />
	<input type="hidden" name="em" value="0" />
	<input type="image" src="https://payment.billingmaker.com/logo/" border="0" name="submit" alt="-->" />
</form>
```
Erläuterung der Werte:

| Wert  | Beschreibung | Pflichtfeld |
| ------------- | ------------- | ------------- |
| h  | Ihre Händler-ID  | Ja |
| p  | Preis im Format 1,99  | Ja |
| m  | Modus (1=einmalig, 2=monatlich)  | Ja |
| b  | Bezeichnung  | Ja |
| c  | Individuelle Zuordnung für Ihr System  | Nein |
| bild  | Bild-URL (ohne http) | Nein |
| favicon  | Favicon-URL (ohne http)  | Nein |
| rurl  | Zurückleitungs-URL (mit http)  | Nein |
| nurl  | Benachrichtigungs-URL (mit http)  | Nein |
| aa  | AdressAbfrage (kann später ausgelesen werden, 1=ein)  | Nein |
| em  | EmailAbfrage (kann später ausgelesen werden, 1=ein)  | Nein |

Falls Sie einzelne Felder nicht nutzen wollen, müssen Sie die gesamte Zeile löschen. Dies ist nur möglich bei optionalen Feldern.
