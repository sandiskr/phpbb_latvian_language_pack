# Latviešu valodas paka phpBB versijām
( phpbb_latvian_language_pack )
English readers, please see below.

## Ievads
Šis ir brīvprātīgs projekts, lai nodrošinātu latviešu valodas eksistenci phpBB forumam. Šobrīd pilnīgi viss forums vēl nav iztulkots latviski, taču ir nodrošināts pietiekami liels tulkojumu daudzums, lai foruma lietošanas pieredze būtu latviska.

## phpBB versijas
Vispilnīgākā saderība ir nodrošināta, ja izmantotā tulkojuma un phpBB forumu versijas pilnībā sakrīt. Šobrīd ir pieejami tulkojumi phpBB versijām 3.3.3 un 3.2.2.
Ja tiek lietota cita phpBB foruma versija, liela iespēja ir, ka tulkojums strādās. Piemēram, visām versijām 3.2.x var izmantot pieejamo 3.2.2 versijas tulkojumu, visām 3.3.x versijām var izmantot 3.3.3 versijas tulkojumu. Arī 3.3.x versijas var izmantot 3.2.2 tulkojumu, lai gan tas nebūtu vēlams, jo ar 3.3.x versiju ir ieviesti jauni lauki, kas pavisam noteikti nebūs iztulkoti. Nav vēlams izmantot phpBB foruma 3.2.x versijā tulkojumu no 3.3.x versijas, jo jaunākajā būtiskajā versijā ir jaunievedumi, kurus vecāka versija nemācēs izmantot un, piemēram, dažādos ziņojumos var rādīties tulkojuma koda daļas.

Šobrīd ir pieejamas divas tulkojuma versijas:
3.2.2, kas izvietots apakšmapē latvian_3_2_2
3.3.3, kas izvietots apakšmapē latvian_3_3_3

## Tulkošanas organizācija
Dalībai nepieciešams reģistrēties github.com un būt autorizētam ar savu lietotāju, lai piedalītos labošanā.

Lai iesniegtu tulkojumu, lūdzu izmantojiet "development" zaru (branch), ko ieslēdz pārslēdzot izvēlni no Branch: master uz Branch: development. "Master" zars ir aizsargātais gatavais zars, kuru var publicēt vai kopēt izmantošanai. "Izstrādes" (development) zars domāts izmaiņu iesniegšanai un aktuālajiem labojumiem. Kad izstrādes zarā ir iesniegti un pieņemti gana daudz labojumi, atrisināti iesniegtie konflikti, tad izmaiņas no izstrādes zara regulāri tiks ieliktas gatavajā master zarā.

Eksistē vairākas tulkojumu versijas, kas atbilst noteiktai phpBB foruma versijai. Būtu vēlams tulkot pēdējo versiju skatoties pēc versijas numura. Jaunākā versijā parasti ir visi tie paši tulkojumu parametri, kas ir vecākā versijā, tikai papildināti ar izmaiņām.

## Piemērs, kā tulkot
Atverot mapi latvian_3_2_2/language/lv/ parādās saraksts ar tulkojamiem failiem, kas ir ar paplašinājumu "php". Spiežot tiem virsū un izvēloties "Edit this file" (labajā augšējā izvēlnē), parādās iespēja iztaisīt labojumus.

Tulkojamo datu piemērs no faila "groups.php":

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'The selected group is already your default group.',
  ...

kur ALREADY_DEFAULT_GROUP ir tulkojuma vietas nosaukums (jāatstāj nelabots) un "The selected group is already your default group." ir tulkojamais teksts, kas jāpārtulko latviski.

Ja tulkojuma tekstā ir ar % atzīmēti īpašie vārdi, piemēram, "%HERE", tad tos nepieciešams saglabāt tulkojumā ar domu, ka tos aizstās aizvietojamie vārdi. Piemēram, "Labdien, %u !" nozīmēs, ka %u vietā tiks ievietots lietotājvārds un tulkojums tiks attēlots kā "Labdien, janis_123 !"

Var nelabot visus tekstus, bet tikai tos, kas šķiet saprotami. Vēlama pieredze ar foruma lietošanu, lai būtu zināms kurās vietās redzami attēlojamie teksti un varētu izdarīt attiecīgās izmaiņas.

Pēc tam, kad labojumi ir izdarīti, tos saglabā. Apakšā zem labojuma loga var izvēlēties "Create a new branch for this commit and start a pull request." un nospiest "Propose file changes". Tas izveidos pieprasījumu izvērtēt iesniegtos labojumus.
Vēlams ievadīt piezīmi par to kas ir izlabots vai citu svarīgu informāciju attiecībā par labojumu.

Oficiālā pamācība kā veikt tulkošanu atrodama šeit (angļu valodā): http://area51.phpbb.com/docs/32x/coding-guidelines.html#translation

# Latvian translation pack for phpBB

Translating is intended for latvian speaking people, so if you have hard time reading text above, then it is doubtful you will have an impact to direct translation process. However, if you want to try to spot some syntax mistakes or something else not related to language, you are welcome to participate.

Currently this pack is under development. This pack (with all the latest updates) is being already used in live forum: https://forums.dabasdati.lv/, where optional "Latvian" language can be enabled in profile.

Milestones:
1) as of august of 2018 we have translated most if not all of the visible texts in the front page.
2) as of april of 2021 this project starts to host multiple translation versions, starting with 3.3.3
