<?php
/*****************function booklooker_bot*************/

//Ausgabe Produkt-Kategorie
if(isset($prod_ID)){
$link="http://www.booklooker.de/app/result.php?page=1&recPerPage=100&setMediaType=" . $prod_ID . "&autor=&verlag=&isbn=&sprache=&einbandCategory=&einband=&titel=&infotext=&year_from=&year_to=&sparteID=&sparte1ID=&showAlluID=" . $uID . "&cheapie=&price_min=&price_max=&datefrom=&searchUserTyp=&land=&lfdnr=&hasPic=&onlySwiss=&message=&newBooks=on&oldBooks=on&&sortOrder=default";
}
if($sparte=="sparte1ID"){
$link="http://www.booklooker.de/app/result.php?page=1&recPerPage=100&sparte1ID=" . $sparteID . "&showAlluID=" . $uID . "&setMediaType=" . $prod_ID;
}
if($sparte=="sparteID"){
$link="http://www.booklooker.de/app/result.php?page=1&recPerPage=100&sparteID=" . $sparteID . "&showAlluID=" . $uID . "&setMediaType=" . $prod_ID;
}
$site=$link;
//Seite einlesen und prüfen

$file = file_get_contents($site);
$pattern='/(<tr class="resultlist_productsproduct">)(.*)<\/tr>/Umis';
preg_match_all($pattern,$file,$match);
//echo "Sparte ID: " . $sparteID . " Sparte: " . $sparte . " Kategorie: " . $prod_ID . "<br />";
echo '<table style="width:100%; border-style:solid; border-width:1px; border-collapse:collapse;">';
    foreach ($match[0] as $link)
    {
    $link=ereg_replace ( 'href="', 'target="_blank" href="http://www.booklooker.de', $link );
		$link=ereg_replace ( 'src="images/cover/user_thumb/', 'src="http://www.booklooker.de/app/images/cover/user_thumb/', $link );
		$link=ereg_replace ( 'src="/images/icon', 'src="http://www.booklooker.de/images/icon', $link );
		$link=ereg_replace ( 'src="/images/linien.gif', 'src="http://www.booklooker.de/images/linien.gif', $link );		
		$link=ereg_replace ( '</span></a>', '</span></a><br />', $link );
		$link=ereg_replace ( 'in den Warenkorb', '', $link );
		$link=ereg_replace ( 'ü', '&uuml;', $link );
		$link=ereg_replace ( 'ä', '&auml;', $link );
		$link=ereg_replace ( 'ö', '&ouml;', $link );
		$link=ereg_replace ( 'ß', '&szlig;', $link );
    $link=ereg_replace ( '<a target="_blank" href="http://www.booklooker.de/pages/anbieterinfo.php?"><img src="http://www.booklooker.de/images/linien.gif" alt="mit ausf&uuml;hrlicher Beschreibung" title="mit ausf&uuml;hrlicher Beschreibung" style="margin-right: 5px; border:0" /></a>', '', $link );
		$link=ereg_replace ( 'ß', '&szlig;', $link );
    $link=ereg_replace ( ' width="25"', '', $link );
		$link=ereg_replace ( ' align="left" hspace="3" vspace="3"', '', $link );
    $link=ereg_replace ( ' border="0">', ' style="border:0; float: left; margin: 0 10px 10px 0" />', $link );
		$link=ereg_replace ( '<br>', '<br />', $link );
		$link=ereg_replace ( ' border:0">', ' border:0" />', $link );
		echo $link;
    }
echo "</table>";
    
//Ende function book_bot

?>