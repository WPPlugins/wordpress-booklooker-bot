<?php
/*
Plugin Name: Wordpress-Booklooker-bot
Plugin URI: http://mannis-shoutbox.mvzid.de/wordpress/plugin-wordpress-booklooker-bot
Description: Ein einfaches Wordpress-Plugin um Deine Booklookerangebote auch auf Deinem Blog listen zu können. Dieses Plugin darf jeder kostenlos benutzen, verändern und auch kostenlos weiterreichen. Bevor Ihr allerdings das Plugin
installiert, solltet ihr eine Sicherung Eures Blogs machen. Gewährleistung kann ich nicht anbieten - also eigenes Risiko. 
Author: Manfred van Zütphen
Version: 1.0.1
License: GPLv2
Author URI: http://mannis-shoutbox.mvzid.de/impressum/
Update Server:
Min WP Version: 3.0
Max WP Version: 3.+
*/

/**********Optionen******************/
//einträge

//Booklooker UID
$booklook_uid = get_option('booklook_uid');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_uid', esc_html( $_POST['booklook_uid'] ) );
    }
} 

//Produktkategorie ID
$prod_id = get_option('prod_id') ;
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'prod_id', esc_html( $_POST['prod_id'] ) );
    }
} 

//Überschrift/Einleitung
$booklook_headline = get_option('booklook_headline');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_headline', esc_html( $_POST['booklook_headline'] ) );
    }
}   
/**********Optionsform*************/ 
function wp_booklooker_option_page() {
?>
<!-- Start Optionen im Adminbereich (xhtml) -->
  <div class="wrap">
    <h2>WP-Booklooker-bot - Einstellungen</h2>
    <form name="bookbot" method="post" action="<?php echo admin_url( "plugins.php?page=bookbotpl" ); ?>">
      <p style="font-weight:bold; font-size:120%">Hier deine Booklooker UID eintragen: </p><input name="booklook_uid" value="<?php echo get_option('booklook_uid'); ?>" type="text" /><br />
      <p style="font-style:italic"><span style="font-weight:bold">Die uID findest du so: </span>Melde dich bei Booklooker an, navigiere zu "Mein Depot" klick auf -->> Meine Angebote.<br />Auf der nun angzeigten Seite klickst auf den Link: "Eigene Angebote aus Kundensicht".<br />In Deinem Bowser schaust Du nun in der Adresszeile nach einer Nummer, die nach "showAlluID=" steht, das ist Deine uID</p>
      <p style="font-weight:bold; font-size:120%">Hier deine Produkt-ID (Kategorie) eintragen: </p><input name="prod_id" value="<?php echo get_option('prod_id'); ?>" type="text" />
      <span style="font-style:italic">(0 = Bücher, 1 = Filme, 2 = Tonträger, 3 = Hörbücher, 4 = Spiele)</span>
      <p style="font-weight:bold; font-size:120%">Hier optional einen Einleitungstext eingeben (wird als Überschrift h3 gezeigt):</p><textarea name="booklook_headline" cols="30" rows="5" /> <?php echo get_option('booklook_headline'); ?></textarea><br />
      <input type="submit" value="Speichern" /><br /><p style="color:red; font-style:italic; font-size:120%">Danach diesen Shortcode: <span style="color:black; font-weight:bold; font-style:normal">[book_bot_short]</span> in eine Seite (z. B.: Neue Seite mit Standardtemplate erstellen)<br /> oder in einen Artikel an einer Stelle deiner Wahl einfügen.</p>
      <input name="action" value="insert" type="hidden" />
    </form>
  </div>
<?php
} // Ende Funktion wp_booklooker_option_page()
//Add submenu
function book_bot_submenu(){
add_submenu_page( 'plugins.php', 'booklooker-bot Optionen', 'Booklooker-bot Optionen', 'manage_options', 'bookbotpl' ,'wp_booklooker_option_page' );
add_option('booklook_uid','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id','0');
add_option('booklook_headline','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
}
// Registrieren der WordPress-Hooks
add_action('admin_menu', 'book_bot_submenu');

/**********Optionen - Ende **********/     

/*****************function booklooker_bot*************/
  function book_bot() {

echo '<h3>' . get_option('booklook_headline') . '</h3><br />';

/*Hier deine uID (User-ID) von Booklooker*/
$uID = get_option('booklook_uid');
$prod_id = get_option('prod_id') ;
$link="http://www.booklooker.de/app/result.php?showAlluID=" . $uID . "&sortOrder=titel&setMediaType=" . $prod_id;
$site=$link;
//Seite einlesen und prüfen

$file = file_get_contents($site);
$pattern='/(<tr class="resultlist_productsproduct">)(.*)<\/tr>/Umis';
preg_match_all($pattern,$file,$match);
echo '<table style="width:100%; border-style:solid; border-width:1px; border-collapse:collapse;">';
     foreach ($match[0] as $link)
     {
    $link=ereg_replace ( 'href="', 'target="_blank" href="http://www.booklooker.de', $link );
		$link=ereg_replace ( 'src="', 'src="http://www.booklooker.de', $link );
		$link=ereg_replace ( 'in den Warenkorb', '', $link );
		$link=ereg_replace ( 'ü', '&uuml;', $link );
		$link=ereg_replace ( 'ä', '&auml;', $link );
		$link=ereg_replace ( 'ö', '&ouml;', $link );
		$link=ereg_replace ( 'ß', '&szlig;', $link );
    $link=ereg_replace ( '<a target="_blank" href="http://www.booklooker.de/pages/anbieterinfo.php?zid=88a50f144cb0898a2d6d2d7e0799ca3a"><img src="http://www.booklooker.de/images/linien.gif" alt="mit ausf&uuml;hrlicher Beschreibung" title="mit ausf&uuml;hrlicher Beschreibung" style="margin-right: 5px; border:0" /></a>', '', $link );
		$link=ereg_replace ( ' width="25"', '', $link );
		$link=ereg_replace ( ' align="left" hspace="3" vspace="3"', '', $link );
		$link=ereg_replace ( ' border="0">', ' style="border:0; float: left" />', $link );
		$link=ereg_replace ( '<br>', '<br />', $link );
		$link=ereg_replace ( ' border:0">', ' border:0" />', $link );
		//echo '<tr><td>&nbsp;</td><td></td><td></td></tr>';
		echo $link;
     }
echo "</table>";

//}Ende Gesamt while - Link auslesen Daten einlesen
}
/************Shortcode**[book_bot_short]**********************/
add_shortcode( 'book_bot_short', 'book_bot' );
?>