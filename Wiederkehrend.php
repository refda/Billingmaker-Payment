<?php
// ZU ERLEDIGEN:
// 1. Ersetzen Sie den privaten Link durch Ihren eigenen Link, welchen Sie per E-Mail erhalten haben!
// 2. Ersetzen Sie die ID des Vorganges. Die ID haben Sie zuvor über die programmgesteuerte Benachrichtigung erhalten.
$privaterlink="http://www.beispiel.de/xyz?z=123";
$idvorgang=11;
file_get_contents($privaterlink."&del=".$idvorgang."&api=1");
