# phpbb32_latvian_language_pack
Latviešu valodas paka phpBB 3.2.x versijai

Dalībai nepieciešams reģistrēties github.com un būt autorizētam ar savu lietotāju, lai piedalītos labošanā.

Lai iesniegtu tulkojumu, lūdzu izmantojiet "development" zaru (branch), ko ieslēdz pārslēdzot izvēlni no Branch: master uz Branch: development.

Atverot mapi latvian_3_2_2/language/lv/ parādās saraksts ar tulkojamiem failiem, kas ir ar paplašinājumu "php". Spiežot tiem virsū un izvēloties "Edit this file" (labajā augšējā izvēlnē), parādās iespēja iztaisīt labojumus.

Tulkojamo datu piemērs no faila "groups.php":

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'The selected group is already your default group.',
  ...

kur ALREADY_DEFAULT_GROUP ir tulkojuma vietas nosaukums (jāatstāj nelabots) un "The selected group is already your default group." ir tulkojamais teksts, kas jāpārtulko latviski.

Ja tulkojuma tekstā ir ar % atzīmēti īpašie vārdi, piemēram, "%HERE", tad tos nepieciešams saglabāt tulkojumā ar domu, ka tos aizstās aizvietojamie vārdi. Piemēram, "Labdien, %u !" nozīmēs, ka %u vietā tiks ievietots lietotājvārds un tulkojums tiks attēlots kā "Labdien, janis_123 !"

Var nelabot visus tekstus, bet tikai tos, kas šķiet saprotami. Vēlama pieredze ar foruma lietošanu, lai būtu zināms kurās vietās redzami attēlojamie teksti un varētu izdarīt attiecīgās izmaiņas.

Pēc tam kad labojumi ir izdarīti, tos saglabā apakšā zem labojuma loga izvēloties "Create a new branch for this commit and start a pull request." un nospiest "Propose file changes". Tas izveidos pieprasījumu izvērtēt iesniegtos labojumus.
Vēlams ievadīt piezīmi par to kas ir izlabots vai citu svarīgu informāciju attiecībā par labojumu.
