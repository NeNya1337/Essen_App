Zusammenstellen von Mahlzeiten:

gewünschte Funktionen:

* Nahrungsmittel nach Art hinzufügen
* auch Angabe von zubereiteten Speisen und Komplettmahlzeiten möglich
* Angabe von Kalorien
* zufällige zusammenstellung einer Mahlzeit

weitere mögliche Features:
* Einteilung der Nahrung nach Küche
* Angabe von Rohzutaten/Einkaufsliste
* Anpassung der Personenzahl der Speisen


TODOS:
* weiter arbeiten mit issues
* eventuell Anmerkung zu Speisen (später nur im Tooltip z.b.)
* back button von Mahlzeiten
* Entgegennahme von select für Zutaten-Art
* viel input
* eventuell json/csv Import ermöglichen ?
* Komplettmahlzeiten/Zubereitetes Kombinationen:
  * alles (Möhrengemüse)
  * Beilage+Sättigung (Khitaraki-Salat)
  * Fleisch+Gemüse (Bolognese)
  * fleisch+Sättigung (?)
  * → wie soll hier die Umsetzung geschehen?
    * Denkansätze:
      * möglicher Umbau von FK-ID zu drei Felder is_fleisch etc
        * Problem: hier würde eine Speise in allen drei Listen auftauchen
        * Parsen problematischer
      * neue typen (s.o.)
        * besserer Ansatz: hier würden am Ende nur 4 Listen entstehen
        * fleisch, sättigung, beilage, hybrid(hier nicht unterscheiden)
        * Problem: bei der Zusammenstellung der Speise müsste ein komplexerer Algorithmus eingesetzt werden, um zufallsbasiert zu entscheiden, was benötigt wird
        * besserer Algorithmus: erste Zutat (zufällig F, S, B) inklusive der ihr zugeordneten Hybrid-Speisen
        * danach: prüfen welche Zutaten fehlen und diese in ähnlicher Weise erstellen
      * nur komplettspeisen statt gemischte hybride
        * diese würde mit Zutat 1 mit in Pool genommen#
        * anschließend Prüfung ob Komplettspeise, dann Mahlzeit fertig, sonst andere Zutaten
* Planung für Zutaten / Einkaufslisten
