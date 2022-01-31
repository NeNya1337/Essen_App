Anforderungen:

* Speicherung von Zutaten
* Kategorien für Zutaten
  * Fleisch
  * Beilage
  * Sättigung
* Zusammenstellung von Speisen
* Zuordnung bestimmte Küche
* Vorbereitung fertiger Gerichte
  * Fleischwurstsalat
  * Bolognese/Lasagne



Ansätze:
* Entity Essen
  * fk Kategorien
  * kalorien/100g
* Entity Mahlzeit
  * fk fleisch
  * fk Beilage
  * fk Sättigung
  * menge Zutat pP
  * computed Kalorien/Mahlzeit
  * NtoM extras
* Entity Komplettmahlzeit
  * kalorien





Beispiele für Essen
* Fleisch
  * Steak
  * Fischstäbchen
  * Hühnchen
* Beilage
  * Spinat
  * Salat
  * Misch-Kohl
* Sättigung
  * Pommes
  * Nudeln
  * Reis
* Extras
  * Kräuterbutter
  * Mayonnaise
  * Ketchup
  * Knoblauchsoße
  * Salatsoße
* Komplettmahlzeiten
  * Bolognese
  * Fleischwurstsalat
  * Khitaraki Salat