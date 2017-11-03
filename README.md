# lib-kaamelott
Librairie PHP pour les citations de la série française Kaamelott

## Utilisation
### Citation aléatoire
```php
$app->random();
```
>Retourne une citation aléatoire parmis toutes les citations disponible.

```php
$app->randomPersonnage($personnage);
```
>Retourne une citation aléatoire parmis toutes les citations du personnage.

```php
$app->randomLivre($livre);
```
>Retourne une citation aléatoire parmis toutes les citations du livre.

```php
$app->randomLivrePersonnage($livre, $personnage);
```
>Retourne une citation aléatoire parmis toutes les citations du personnage dans le livre.


### Toutes les citations
```php
$app->all();
```
>Retourne toutes les citations disponible.

```php
$app->randomPersonnage($personnage);
```
>Retourne toutes les citations du personnage.

```php
$app->allLivre($livre);
```
>Retourne toutes les citations du livre.
  
```php
$app->allLivrePersonnage($livre, $personnage);
```
>Retourne toutes les citations du personnage dans le livre.

### Paramètres
  - `$livre` - int - Entre 1 et 6
  - `$personnage` - string - Présent dans la liste suivante :
      - Angharad
      - Anna
      - Appius Manilius
      - Arthur
      - Attila
      - Belt
      - Père Blaise
      - Bohort
      - Breccan
      - Le Roi Burgonde
      - Caius Camillus
      - Calogrenant
      - Capito
      - César
      - Cryda de Tintagel
      - Dagonet
      - La Dame du Lac
      - Demetra
      - Drusilla
      - Le Duc d'Aquitaine
      - Edern
      - Elias de Kelliwic'h
      - Galessin
      - Gauvain
      - Goustan
      - Grüdü
      - Guenièvre
      - Guethenoc
      - Hervé de Rinel
      - L'interprète burgonde
      - Le Seigneur Jacca
      - Les Jumelles du pêcheur
      - Le Jurisconsulte
      - Kadoc
      - Karadoc
      - Lancelot
      - Léodagan
      - Loth
      - Le Maître d'Armes
      - Méléagant
      - Manius Macrinus Firmus
      - Merlin
      - Mevanwi
      - Perceval
      - Roparzh
      - Lucius Sillius Sallustius
      - Séfriane d'Aquitaine
      - Séli
      - Spurius Cordius Frontinius
      - Le Tavernier
      - Urgan
      - Vérinus
      - Venec
      - Ygerne
      - Yvain

### Exemple de réponse :
```php
array(2) {
	["citation"]=> string(110) " Ooooooooh, non mais faire du labyrinthe avec un trou-de-balle pareil, faut drôlement de la vaillance, hein !"
	["infos"]=> array(5) {
		["auteur"]=> string(16) "Alexandre Astier"
		["acteur"]=> string(14) "Lionnel Astier"
		["personnage"]=> string(9) "Léodagan"
		["saison"]=> string(9) "Livre II "
		["episode"]=> string(9) "L’Oubli"
	}
}
```
