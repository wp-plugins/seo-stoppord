<?php
/*
	Plugin Name: SEO Stoppord
	Plugin URI: http://www.mkwebdesign.ca
	Description: Tar bort svenska stoppord ifrån inlägg sluggen för bättre SEO.
	Version: 1.2
	Author: Mikael Kjellstrom
	Author URI: http://www.mkwebdesign.ca
	
	Based on SEO Slugs by vretoolbar

	Licensed under the terms of the GPL version 2, see: http://www.gnu.org/licenses/gpl-2.0.html

Provided without warranty, inluding any implied warrant of merchantability or fitness for purpose.

*/

add_filter('name_save_pre', 'seo_slugs', 0);

function seo_slugs($slug) {

	if ($slug) return $slug;

	global $wpdb;
	$seo_slug = strtolower(stripslashes($_POST['post_title']));

	$seo_slug = preg_replace('/&.+?;/', '', $seo_slug);
    $seo_slug = preg_replace ("/[^a-zA-Z0-9åÅäÄöÖøØ \']/", "", $seo_slug);
    $seo_slug_array = array_diff (split(" ", $seo_slug), seo_slugs_stop_words());
    $seo_slug = join("-", $seo_slug_array);

	return $seo_slug;
}

function seo_slugs_stop_words () {
    return array ("0","1","2","3","4","5","6","7","8","9","a","about","aldrig","all","alla","alldeles","alls","allt","alltid","alltså","an","and","andra","annan","annat","använda","are","as","at","att","av","b","bakom","bara","be","behöver","bild","bilden","bland","blev","bli","blir","blivit","borde","bort","bra","bra.","but","by","bygga","bästa","bättre","både","bör","börja","börjar","can","dag","dagens","dags","de","del","dem","den","deras","dessutom","det","det.","dig","din","direkt","do","du","där","då","efter","eftersom","egen","egentligen","egna","eller","emot","en","enda","enkelt","ens","er","ett","exempel","fa","faktiskt","fan","fantastiskt","fel","fick","finns","fler","flera","for","fortfarande","fortsätter","fram","from","fråga","frågan","från","funkar","få","får","fått","följa","för","först","första","förstår","försöka","försöker","gamla","gammal","ganska","ge","genom","ger","get","gick","gillar","givetvis","gjorde","gjort","good","grymt","gäller","gärna","gå","gång","gången","går","gör","göra","ha","hade","haft","haha","han","handlar","hans","har","have","hela","heller","helst","helt","hemma","hitta","hittar","hon","hoppas","hos","how","http","hur","händer","här","här.","hålla","håller","i","iaf","ibland","id","idag","idag.","igen","igång","igår","ihop","in","information","inför","ingen","inget","innan","inom","inte","intressant","is","istället","it","ja","jag","ju","just","kan","kanske","kl","klart","koll","kolla","kom","komma","kommentar","kommentarer","kommer","kul","kunde","kunna","känner","känns","kör","ligger","lika","like","liksom","lista","listan","lite","liten","live","lägga","lägger","länge","längre","länkar","lär","läs","läsa","läser","långt","låta","låter","make","man","massor","me","med","mellan","men","mer","mest","mig","min","mina","mindre","minst","mitt","more","mot","my","mycket","många","måste","ner","new","ni","no","nog","not","now","nu","nu.","ny","nya","nytt","när","nästa","nästan","nätet","någon","något","några","och","också","också.","of","ofta","ok","olika","om","on","one","open","or","ord","oss","otroligt","our","out","p","par","people","plats","precis","problem","på","på.","redan","riktigt","runt","rätt","s","sagt","sak","saker","samma","se","sedan","senaste","ser","sett","sidan","sig","sig.","sin","sina","sista","sitt","sitter","själv","ska","skrev","skriva","skriver","skulle","smart","snart","snyggt","so","social","som","spännande","stor","stora","stort","står","större","svårt","säga","säger","säkert","sätt","sätta","sätter","så","t","ta","tack","tar","tex","text","texten","that","the","they","this","tid","tiden","tidigare","till","till.","tillbaka","time","tips","titta","to","tre","tror","trots","två","tycker","tyvärr","tänka","tänker","under","underbart","undrar","up","upp","ur","ut","utan","ute","vad","var","vara","varför","varit","varje","vecka","vem","verkar","verkligen","vet","vi","via","vid","vidare","viktigt","vilka","vilken","vilket","vill","visar","visst","vore","väl","väldigt","vår","våra","vårt","we","what","will","with","world","you","your","älskar","än","ändå","ännu","äntligen","är","även","år","åt","öppna","över","a","about","again","alla","allt","alltid","and","andra","at","att","av","bakom","bara","bild","bilden","blev","bli","blir","borde","bra","by","bäst","bästa","bättre","dagar","dagens","dags","de","del","den","det","din","dina","ditt","du","där","därför","då","dålig","e","edition","efter","egen","egentligen","eller","en","enda","enkelt","enligt","ett","fel","finns","fler","for","från","fyra","får","för","första","gamla","gammal","gillar","gissa","glömt","goes","gå","går","gör","göra","ha","har","hela","helt","hur","här","i","idag","igen","in","information","ingen","inget","inte","it","it's","ja","jag","ju","just","k","kan","kolla","kommentarer","kommer","konstigt","kort","kul","känns","kör","ligger","lika","listan","lite","liten","live","lyssna","låter","man","med","mellan","men","mer","mig","min","mindre","mitt","mot","mycket","märkligt","måndag","många","måste","nej","new","not","nr","nu","ny","nya","nytt","när","närmar","något","o","och","också","of","ok","old","om","on","open","our","pengar","plats","plötsligt","precis","på","riktigt","rätt","s","sagt","saker","sig","sista","ska","skillnaden","sluta","smart","snart","snyggt","som","sommar","spännande","start","stor","står","svar","säger","sätt","så","ta","tack","tar","test","the","till","tio","tips","tjänar","to","två","undrar","up","upp","ut","vackert","vad","var","vara","varför","vecka","veckans","vem","verkligen","vet","vi","vid","vilken","vill","väg","väl","värld","världens","vårt","än","ännu","äntligen","är","år","årets","öppen","över");
}
?>
