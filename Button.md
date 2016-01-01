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
	<input type="image" src="https://payment.billingmaker.com/logo/" border="0" name="submit" alt="-->" />
</form>
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

Falls Sie einzelne Felder nicht nutzen wollen, müssen Sie die gesamte Zeile löschen. Dies ist nur möglich bei optionalen Feldern.
