<?php
/*
Plugin Name: Wordpress-Booklooker-bot
Plugin URI: http://mannis-shoutbox.de/wordpress/plugin-wordpress-booklooker-bot
Description: Ein einfaches Wordpress-Plugin um Deine Booklookerangebote auch auf Deinem Blog listen zu können. Dieses Plugin darf jeder kostenlos benutzen, verändern und auch kostenlos weiterreichen. Bevor Du allerdings das Plugin
installiert, solltest Du eine Sicherung Deines Blogs machen. Gewährleistung kann ich nicht anbieten - also eigenes Risiko. 
Author: Manfred van Zütphen
Version: 2.0.1
License: GPLv2
Author URI: http://mannis-shoutbox.de/impressum/
Update Server:
Min WP Version: 3.0
Max WP Version: 4.+
*/
/**********Optionen******************/
/**********Optionen wp_booklooker_option_page*************/ 
function wp_booklooker_option_page(){
//Einträge
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
//Limitierte Menge "Von"  boolook_limitFrom
$limitFrom = get_option('booklook_limitFrom');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_limitFrom', esc_html( $_POST['booklook_limitFrom'] ) );
    }
}
//Limitierte Menge "Bis"  booklook_limit
$limit = get_option('booklook_limit');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_limit', esc_html( $_POST['booklook_limit'] ) );
    }
}
//Sparte = Unterkategorie-Kürzel
if(!isset($_POST['booklook_sparte'])) ($_POST['booklook_sparte']="keine");
$booklook_sparte = get_option('booklook_sparte');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_sparte', esc_html( $_POST['booklook_sparte'] ) );
    }
} 
//SparteID = Unterkategorie
if(!isset($_POST['booklook_sparteID'])) ($_POST['booklook_sparteID']="");
$booklook_sparteID = get_option('booklook_sparteID');
if(isset($_POST['action'])){
if ('insert' == $_POST['action']) {
    update_option( 'booklook_sparteID', esc_html( $_POST['booklook_sparteID'] ) );
    }
} 
//Booklooker UID1
$booklook_uid1 = get_option('booklook_uid1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_uid1', esc_html( $_POST['booklook_uid1'] ) );
    }
} 
//Produktkategorie ID1
$prod_id1 = get_option('prod_id1') ;
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'prod_id1', esc_html( $_POST['prod_id1'] ) );
    }
} 
//Überschrift/Einleitung1
$booklook_headline1 = get_option('booklook_headline1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_headline1', esc_html( $_POST['booklook_headline1'] ) );
    }
}
//Limitierte Menge "Von" 1 
$limitFrom1 = get_option('booklook_limitFrom1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_limitFrom1', esc_html( $_POST['booklook_limitFrom1'] ) );
    }
}
//Limitierte Menge "Bis"   1
$limit1 = get_option('booklook_limit1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_limit1', esc_html( $_POST['booklook_limit1'] ) );
    }
} 
//SparteID = Unterkategorie1-Kürzel
if(!isset($_POST['booklook_sparte1'])) ($_POST['booklook_sparte1']="keine");
$booklook_sparte1 = get_option('booklook_sparte1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_sparte1', esc_html( $_POST['booklook_sparte1'] ) );
    }
} 
//SparteID = Unterkategorie1
if(!isset($_POST['booklook_sparteID1'])) ($_POST['booklook_sparteID1']="");
$booklook_sparteID1 = get_option('booklook_sparteID1');
if(isset($_POST['action'])){
if ('insert1' == $_POST['action']) {
    update_option( 'booklook_sparteID1', esc_html( $_POST['booklook_sparteID1'] ) );
    }
} 
//Booklooker UID2
$booklook_uid2 = get_option('booklook_uid2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_uid2', esc_html( $_POST['booklook_uid2'] ) );
    }
} 
//Produktkategorie ID2
$prod_id2 = get_option('prod_id2') ;
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'prod_id2', esc_html( $_POST['prod_id2'] ) );
    }
} 
//Überschrift/Einleitung2
$booklook_headline2 = get_option('booklook_headline2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_headline2', esc_html( $_POST['booklook_headline2'] ) );
    }
}
//Limitierte Menge "Von"   2
$limitFrom2 = get_option('booklook_limitFrom2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_limitFrom2', esc_html( $_POST['booklook_limitFrom2'] ) );
    }
}
//Limitierte Menge "Bis"   2
$limit2 = get_option('booklook_limit2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_limit2', esc_html( $_POST['booklook_limit2'] ) );
    }
}  
//SparteID = Unterkategorie2-Kürzel
if(!isset($_POST['booklook_sparte2'])) ($_POST['booklook_sparte2']="keine");
$booklook_sparte2 = get_option('booklook_sparte2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_sparte2', esc_html( $_POST['booklook_sparte2'] ) );
    }
} 
//SparteID = Unterkategorie2
if(!isset($_POST['booklook_sparteID2'])) ($_POST['booklook_sparteID2']="");
$booklook_sparteID2 = get_option('booklook_sparteID2');
if(isset($_POST['action'])){
if ('insert2' == $_POST['action']) {
    update_option( 'booklook_sparteID2', esc_html( $_POST['booklook_sparteID2'] ) );
    }
} 
//Booklooker UID3
$booklook_uid3 = get_option('booklook_uid3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_uid3', esc_html( $_POST['booklook_uid3'] ) );
    }
} 
//Produktkategorie ID3
$prod_id3 = get_option('prod_id3') ;
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'prod_id3', esc_html( $_POST['prod_id3'] ) );
    }
} 
//Überschrift/Einleitung3
$booklook_headline3 = get_option('booklook_headline3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_headline3', esc_html( $_POST['booklook_headline3'] ) );
    }
} 
//Limitierte Menge "Von"   3
$limitFrom3 = get_option('booklook_limitFrom3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_limitFrom3', esc_html( $_POST['booklook_limitFrom3'] ) );
    }
}
//Limitierte Menge "Bis"   3
$limit3 = get_option('booklook_limit3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_limit3', esc_html( $_POST['booklook_limit3'] ) );
    }
}  
//SparteID = Unterkategorie3-Kürzel
if(!isset($_POST['booklook_sparte3'])) ($_POST['booklook_sparte3']="keine");
$booklook_sparte3 = get_option('booklook_sparte3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_sparte3', esc_html( $_POST['booklook_sparte3'] ) );
    }
} 
//SparteID = Unterkategorie3
if(!isset($_POST['booklook_sparteID3'])) ($_POST['booklook_sparteID3']="");
$booklook_sparteID3 = get_option('booklook_sparteID3');
if(isset($_POST['action'])){
if ('insert3' == $_POST['action']) {
    update_option( 'booklook_sparteID3', esc_html( $_POST['booklook_sparteID3'] ) );
    }
} 
//Booklooker UID4
$booklook_uid4 = get_option('booklook_uid4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_uid4', esc_html( $_POST['booklook_uid4'] ) );
    }
} 
//Produktkategorie ID4
$prod_id4 = get_option('prod_id4') ;
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'prod_id4', esc_html( $_POST['prod_id4'] ) );
    }
} 
//Überschrift/Einleitung4
$booklook_headline4 = get_option('booklook_headline4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_headline4', esc_html( $_POST['booklook_headline4'] ) );
    }
}
//Limitierte Menge "Von"   4
$limitFrom4 = get_option('booklook_limitFrom4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_limitFrom4', esc_html( $_POST['booklook_limitFrom4'] ) );
    }
}
//Limitierte Menge "Bis"   4
$limit4 = get_option('booklook_limit4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_limit4', esc_html( $_POST['booklook_limit4'] ) );
    }
}   
//SparteID = Unterkategorie4-Kürzel
if(!isset($_POST['booklook_sparte4'])) ($_POST['booklook_sparte4']="keine");
$booklook_sparte4 = get_option('booklook_sparte4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_sparte4', esc_html( $_POST['booklook_sparte4'] ) );
    }
} 
//SparteID = Unterkategorie4
if(!isset($_POST['booklook_sparteID4'])) ($_POST['booklook_sparteID4']="");
$booklook_sparteID4 = get_option('booklook_sparteID4');
if(isset($_POST['action'])){
if ('insert4' == $_POST['action']) {
    update_option( 'booklook_sparteID4', esc_html( $_POST['booklook_sparteID4'] ) );
    }
} 
//Booklooker UID5
$booklook_uid5 = get_option('booklook_uid5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_uid5', esc_html( $_POST['booklook_uid5'] ) );
    }
} 
//Produktkategorie ID5
$prod_id5 = get_option('prod_id5') ;
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'prod_id5', esc_html( $_POST['prod_id5'] ) );
    }
} 
//Überschrift/Einleitung5
$booklook_headline5 = get_option('booklook_headline5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_headline5', esc_html( $_POST['booklook_headline5'] ) );
    }
}
//Limitierte Menge "Von"   5
$limitFrom5 = get_option('booklook_limitFrom5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_limitFrom5', esc_html( $_POST['booklook_limitFrom5'] ) );
    }
}
//Limitierte Menge "Bis"   5
$limit5 = get_option('booklook_limit5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_limit5', esc_html( $_POST['booklook_limit5'] ) );
    }
}   
//SparteID = Unterkategorie5-Kürzel
if(!isset($_POST['booklook_sparte5'])) ($_POST['booklook_sparte5']="keine");
$booklook_sparte5 = get_option('booklook_sparte5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_sparte5', esc_html( $_POST['booklook_sparte5'] ) );
    }
} 
//SparteID = Unterkategorie5
if(!isset($_POST['booklook_sparteID5'])) ($_POST['booklook_sparteID5']="");
$booklook_sparteID5 = get_option('booklook_sparteID5');
if(isset($_POST['action'])){
if ('insert5' == $_POST['action']) {
    update_option( 'booklook_sparteID5', esc_html( $_POST['booklook_sparteID5'] ) );
    }
} 
?>
<!--Hilfe visibilityscript-->
<script type="text/javascript">
      function toggleVisibility(id) {
      var e = document.getElementById(id);
        if(e.style.display == 'block')
          e.style.display = 'none';
        else
          e.style.display = 'block';
      }
</script>
<!--Hilfe visibility Ende-->    <h2>WP-Booklooker-bot - Einstellungen - Version: 2.0.0</h2>
<!-- Hilfesequenz-->     
<a onclick="toggleVisibility('bb_wichtig_tip');" title="Für Hilfe klicken!" style="cursor:pointer; color: red !important; font-weight: bold; font-size: 1.2em;">Update von 1.x.x auf 2.x.x ??? Hier klicken!!!</a>  
<div style="width:750px; display:none; color: red !important; font-weight: bold; font-size: 1.2em;" id="bb_wichtig_tip">Wenn Du ein Update von einer Version 1.x.x auf eine Version 2.x.x ausgeführt hast, sind alle bisherigen Einstellungen gespeichert. Einzige Ausnahme sind die Produkt-ID(Kategorien).<br /><br />Diese werden nicht mehr als Ziffern eingegeben sondern als (kleingeschriebener) Name (Beispiele: book für Bücher, film für Filme usw.). Diese müssen geändert werden sonst wird im Frontend nichts angezeigt!!!<br /><a href="http://mannis-shoutbox.de/wp-content/uploads/2013/05/Anpassung_WordPress_Booklooker-bot_110_200.jpg" target="_blank" title="Hier noch ein Bild von der Optionsseite mit Erklärungen.">Hier noch ein Bild von der Optionsseite mit Erklärungen.</a> 
</div>
<!-- Hilfesequenz Ende-->      <br /><br />
<!-- Hilfesequenz-->    
<a onclick="toggleVisibility('bb_general_tip');" title="Für Hilfe klicken!" style="cursor:pointer;">Hilfe (So wird es gemacht.)</a>  
<div id="bb_general_tip" style="width:750px; font-style:italic; font-size:110%; text-align:left; display:none">  <h4>Für alle, die dieses Plugin zum ersten Mal benutzen:</h4>  
  <ul style="list-style-type:disc; list-style-position:inside">    
    <li>Folge den Anleitungen, die Du unter den Hilfe-Links findest, dann klappt das schon.
    </li>    
    <li>Zunächst mal die einfache Version versuchen.
    </li>     
    <li>     
    <ul style="margin-left:20px; list-style-type:circle; list-style-position:inside">      
      <li>Die uID einsetzen
      </li>      
      <li>und die Produktkategorie wählen.
      </li>      
      <li>Eine/n Überschrift/Einleitungstext eingeben.<br />Weitere Felder für die Standarversion nicht nötig (150 Titel der gewählten Produktkategorie werden angezeigt.)
      </li>      
      <li>Den 
      <span style="color: red;">Shortcode markieren und kopieren
      </span> und die Eingaben speichern
      </li>      
      <li>Eine neue Seite erstellen,
      </li>      
      <li>Einen Seitentitel eingeben
      </li>      
      <li>und den Shortcode in den Textbereich einfügen.
      </li>      
      <li>Wenn in Deinem Blog neue Seiten automatisch zum Menü hinzugefügt werden, bist Du fertig. Andernfalls musst Du nun die Seite noch zum/r Menü/Navi hinzufügen.
      </li>       
    </ul>     
    </li>    
    <li>Wenn es nicht gelingt oder Fragen offen sind, kannst Du mich immer kontaktieren, ich beiße nicht, bin geduldig und hilfbereit. Hier 
    <a title="Hier Kontakt aufnehmen mit Manni" href="http://mannis-shoutbox.de/email/">Manni</a> kannst Du ein Formular benutzen.
    </li>  
  </ul>  
</div>
<!-- Hilfesequenz-->      <br /><br />     
<div style='float:left; width:750px; margin:0 0 0 0; background-color:#ececec; padding:0px 10px 0px 10px'>     
<?php
/************* Options-Seitensteuerung (Forms)***************/
if(isset($_POST['action'])){
if('insert' == $_POST['action']) ($_bb_indicate = "bb_standard_form1");
if('insert1' == $_POST['action']) ($_bb_indicate = "bb_templ_1");
if('insert2' == $_POST['action']) ($_bb_indicate = "bb_templ_2");
if('insert3' == $_POST['action']) ($_bb_indicate = "bb_templ_3");
if('insert4' == $_POST['action']) ($_bb_indicate = "bb_templ_4");
if('insert5' == $_POST['action']) ($_bb_indicate = "bb_templ_5");
} 
if(isset($_GET['bb_templa_id'])) ($_bb_indicate = $_GET['bb_templa_id']);
/**************** Navi - Visible or not *************/
if((!isset($_bb_indicate))||($_bb_indicate == "bb_standard_form1")){
echo " 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Standardtemplate </span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_1'> Extra 1 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_2'> Extra 2 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_3'> Extra 3 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_4'> Extra 4 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_5'> Extra 5 </a></span>";
include("bb_standard_form.php");
}
elseif
($_bb_indicate == "bb_templ_1"){
echo " 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_standard_form1'>Standardtemplate</a></span> 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Extra 1 </span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_2'> Extra 2 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_3'> Extra 3 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_4'> Extra 4 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_5'> Extra 5 </a></span>";
include("bb_templ_1_form.php");
}
elseif
($_bb_indicate == "bb_templ_2"){
echo " 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_standard_form1'>Standardtemplate</a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_1'> Extra 1 </a></span> 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Extra 2 </span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_3'> Extra 3 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_4'> Extra 4 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_5'> Extra 5 </a></span>";
include("bb_templ_2_form.php");
}
elseif
($_bb_indicate == "bb_templ_3"){
echo " 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_standard_form1'>Standardtemplate</a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_1'> Extra 1 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_2'> Extra 2 </a></span> 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Extra 3 </span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_4'> Extra 4 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_5'> Extra 5 </a></span>";
include("bb_templ_3_form.php");
}
elseif
($_bb_indicate == "bb_templ_4"){
echo " 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_standard_form1'>Standardtemplate</a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_1'> Extra 1 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_2'> Extra 2 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_3'> Extra 3 </a></span> 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Extra 4 </span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_5'> Extra 5 </a></span>";
include("bb_templ_4_form.php");
}
elseif
($_bb_indicate == "bb_templ_5"){
echo " 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_standard_form1'>Standardtemplate</a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_1'> Extra 1 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_2'> Extra 2 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_3'> Extra 3 </a></span> 
<span style='font-size:115%; height:30px; background-color:#ececec; padding:0px 0px 0px 5px'><a href='" . admin_url( 'plugins.php?page=bookbotpl' ) . "&bb_templa_id=bb_templ_4'> Extra 4 </a></span> 
<span style='font-size:130%; text-align:center; height:50px; background-color:#ffffff; border-style:solid; border-width:2px 2px 0px 2px; border-color:#ececec; padding:5px 0px 15px 0px'> Extra 5 </span>";
include("bb_templ_5_form.php");
}
  ?> 
</div>
<!-- Sidebar Infos-->

<div style="width: 300px; float: left; margin:0 0 0 30px; padding: 5px; border: 2px solid #ececec;">
<!-- What's new?-->     
<h3 style="color: red;"><a onclick="toggleVisibility('bb_whats_new_tip');" title="Für Hilfe klicken!" style="cursor:pointer; color: red !important; font-weight: bold; font-size: 1.2em;">NEU in WP-Booklooker-bot!!! Hier klicken!!!</a></h3>  
<div style="display:none; float: left; background-color: #eee !important; width: 100%"" id="bb_whats_new_tip">
<ul style="background-color: #eee !important; list-style: disc; margin: 0 0 0 15px;">
  <li>Änderung des Datenabrufs auf eine API-Version weil:
    <ul style="list-style: disc !important; margin: 0 0 0 10px !important; background-color: #eee !important;">
      <li>Viele Blogger die alte Version aufgrund strenger Sicherheitseinstellungen ihrer Hoster nicht nutzen konnten. :-( </li>
      <li>Es können jetzt 150 Artikel pro Seite angezeigt werden. Insgesamt sind das 900 Artikel.</li> 
      <li>Der Zugriff auf diese Weise schneller und sicherer funktioniert.</li>
      <li>Ich mich nicht um Änderungen auf den Booklookerseiten kümmern und diese im Plugin anpassen muss.</li>
    </ul>
  </li>
  <li>Bessere, leichtere Anpassung an Euer Layout durch ein vorhandenes Booklooker-bot-Plugin-Stylesheet. Generell werden Eure Grundeinstellungen wie Schrift, Farben, Hintergründe etc. erst mal übernommen. Wichtige Punkte zum Anpassen:</li>
    <ul style="list-style: disc !important; margin: 0 0 0 10px !important;">
      <li style="color: red;">Wenn Ihr im Stylesheet Anpassungen vornehmt, speichert die Datei style_wpbb.css nach den abgeschlossenen Änderungen per FTP auf Euerm Rechner, sonst werden Eure Anpassungen bei einem Update überschrieben. </li>
      <li>Die breite der Tabelle, in der die Produkte angezeigt werden, ist auf eine Größe von 100% Deiner inneren Seitenbreite und auf eine minimale Breite von 500px festgelegt.</li>
      <li>Das komplette Stylesheet ist mit Kommentaren verfasst, die Euch die Einstellungen leicht machen sollten.</li>
    </ul>
  <li>Ab jetzt gibt es eine Feinanpassung an die verschiedenen Produktkategorien </li>
  <li>Ersatzbilder erscheinen, wenn ihr keine Produktbilder beim Einstellen Eurer Artikel bei Booklooker verlinkt habt.<br />ACHTUNG!!! Im letzten Jahr hat Booklooker Bilder auf den Servern verschoben. Defekte Bilderlinks werden nicht zur Nichtanzeige gebracht. Stattdessen wird der, aus dem Titel und dem Autor, generierte Alt-Tag anstatt des Bildes angezeigt (unschön).</li>
  <li>Die Ersatzbilder book_standard.png, music_standard.png, film_standard.png und game_standard.png können natürlich durch eigene mit gleichem Namen ersetzt werden.</li>
</ul>
</div>
<div style="clear: left; float: left; background-color: #eee !important; width: 100%">   
<p style="font-weight:bold; font-size:110%">Hier kannst Du die Arbeit am Plugin WordPress Booklooker-bot durch eine Spende unterstützen, die Höhe bestimmst Du selbst:
  </p>
  <p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="BCG2YW7SFMMXY">
      <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
      <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
    </form>
  </p>
  <p style="font-weight:bold; font-size:110%">Ich freu mich aber auch über Micropayment via Flattr:
  </p>
  <a href="http://flattr.com/thing/459138/WordPress-Booklooker-bot-Downloadseite" target="_blank">
    <img title="Flattr this" src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" border="0" /></a>
    </div>
</div>
<!-- Spendenaufruf Ende-->  
<?php
} // Ende Funktion wp_booklooker_option_page()
//Add submenu
function book_bot_submenu(){
add_submenu_page( 'plugins.php', 'booklooker-bot Optionen', 'Booklooker-bot Optionen', 'manage_options', 'bookbotpl' ,'wp_booklooker_option_page' );
//Standard Einzelseite
add_option('booklook_uid','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id','0');
add_option('booklook_headline','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom','0');
add_option('booklook_limit','149');
add_option('booklook_sparte','keine');
add_option('booklook_sparteID','');
// Template 1
add_option('booklook_uid1','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id1','0');
add_option('booklook_headline1','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom1','0');
add_option('booklook_limit1','149');
add_option('booklook_sparte1','keine');
add_option('booklook_sparteID1','');
// Template 2
add_option('booklook_uid2','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id2','0');
add_option('booklook_headline2','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom2','0');
add_option('booklook_limit2','149');
add_option('booklook_sparte2','keine');
add_option('booklook_sparteID2','');
// Template 3
add_option('booklook_uid3','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id3','0');
add_option('booklook_headline3','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom3','0');
add_option('booklook_limit3','149');
add_option('booklook_sparte3','keine');
add_option('booklook_sparteID3','');
// Template 4
add_option('booklook_uid4','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id4','0');
add_option('booklook_headline4','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom4','0');
add_option('booklook_limit4','149');
add_option('booklook_sparte4','keine');
add_option('booklook_sparteID4','');
// Template 5
add_option('booklook_uid5','Booklooker-UID'); // optionsfield in Tabelle TABLEPRÄFIX_options
add_option('prod_id5','0');
add_option('booklook_headline5','Hier sind die aktuellen Buchangebote aus meinem Buch-Laden');
add_option('booklook_limitFrom5','0');
add_option('booklook_limit5','149');
add_option('booklook_sparte5','keine');
add_option('booklook_sparteID5','');
}
// Registrieren der WordPress-Hooks
add_action('admin_menu', 'book_bot_submenu');
/**
 * include CSS
 */
function style_wpbb(){
  $wpbb_css = WP_PLUGIN_URL . '/wordpress-booklooker-bot/style_wpbb.css';   
  wp_register_style('style_wpbb',$wpbb_css );
  wp_enqueue_style('style_wpbb'); 
}
  add_action('init', 'style_wpbb');
/**********Optionen - Ende **********/
/*****************function shortcode *************/
function book_bot_sc() {
echo '<h3>' . get_option('booklook_headline') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie, limit und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid');
$prod_ID =  get_option('prod_id');
$limitFrom = get_option('booklook_limitFrom');
$limit = get_option('booklook_limit');
$sparteID = get_option('booklook_sparteID');
$sparte = get_option('booklook_sparte');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short]**********************/
add_shortcode( 'book_bot_short', 'book_bot_sc' );
/*****************function shortcode 1 *************/
function book_bot_sc1() {
echo '<h3>' . get_option('booklook_headline1') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid1');
$prod_ID =  get_option('prod_id1');
$limitFrom1 = get_option('booklook_limitFrom1');
$limit1 = get_option('booklook_limit1');
$sparteID = get_option('booklook_sparteID1');
$sparte = get_option('booklook_sparte1');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short1]**********************/
add_shortcode( 'book_bot_short_1', 'book_bot_sc1' );
/*****************function shortcode 2 *************/
function book_bot_sc2() {
echo '<h3>' . get_option('booklook_headline2') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid2');
$prod_ID =  get_option('prod_id2');
$limitFrom2 = get_option('booklook_limitFrom2');
$limit2 = get_option('booklook_limit2');
$sparteID = get_option('booklook_sparteID2');
$sparte = get_option('booklook_sparte2');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short2]**********************/
add_shortcode( 'book_bot_short_2', 'book_bot_sc2' );
/*****************function shortcode 3 *************/
function book_bot_sc3() {
echo '<h3>' . get_option('booklook_headline3') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid3');
$prod_ID =  get_option('prod_id3');
$limitFrom3 = get_option('booklook_limitFrom3');
$limit3 = get_option('booklook_limit3');
$sparteID = get_option('booklook_sparteID3');
$sparte = get_option('booklook_sparte3');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short3]**********************/
add_shortcode( 'book_bot_short_3', 'book_bot_sc3' );
/*****************function shortcode 4 *************/
function book_bot_sc4() {
echo '<h3>' . get_option('booklook_headline4') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid4');
$prod_ID =  get_option('prod_id4');
$limitFrom4 = get_option('booklook_limitFrom4');
$limit4 = get_option('booklook_limit4');
$sparteID = get_option('booklook_sparteID4');
$sparte = get_option('booklook_sparte4');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short4]**********************/
add_shortcode( 'book_bot_short_4', 'book_bot_sc4' );
/*****************function shortcode 5 *************/
function book_bot_sc5() {
echo '<h3>' . get_option('booklook_headline5') . '</h3><br />';
/*Hier die uID (User-ID), Kategorie und Sparte von Booklooker festlegen*/
$uID = get_option('booklook_uid5');
$prod_ID =  get_option('prod_id5');
$limitFrom5 = get_option('booklook_limitFrom5');
$limit5 = get_option('booklook_limit5');
$sparteID = get_option('booklook_sparteID5');
$sparte = get_option('booklook_sparte5');
include("mainfunction.php");
}
/************Shortcode**[book_bot_short5]**********************/
add_shortcode( 'book_bot_short_5', 'book_bot_sc5' );
?>