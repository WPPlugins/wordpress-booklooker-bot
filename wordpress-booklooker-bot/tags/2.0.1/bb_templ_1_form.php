<!--Options Extra1 form -->
<form id="bookbot1" style="width:100%; padding:10px; background-color:#ffffff; border:solid 2px #ececec;" name="bookbot1" method="post" action="<?php echo admin_url( 'plugins.php?page=bookbotpl' ); ?>">      
  <p style="font-weight:bold; font-size:120%">Hier deine Booklooker UID eintragen: 
  </p>
<!-- Hilfesequenz-->        
  <a onclick="toggleVisibility('bb_get_uID_tip'); "title="Für Hilfe klicken!" style="cursor:pointer;">Hilfe zur uID</a><br />      
  <div style="font-style:italic; font-size:110%; display:none" id="bb_get_uID_tip">
    <span style="font-weight:bold">Die uID findest du so: 
    </span>             
    <ul style="list-style-type:disc; list-style-position:inside">      
      <li>Melde dich bei Booklooker an und navigiere zu "Mein Depot".
      </li>      
      <li>Klick auf "Meine Angebote".
      </li>      
      <li>Auf der nun angzeigten Seite klickst auf den Link: "Eigene Angebote aus Kundensicht".
      </li>      
      <li>In Deinem Bowser schaust Du nun in der Adresszeile nach einer Nummer, die nach "showAlluID=" steht, das ist Deine uID
      </li>        
    </ul>
  </div>
<!-- Hilfesequenz Ende-->               
  <p>
    <input name="booklook_uid1" value="<?php echo get_option('booklook_uid1'); ?>" type="text" />
  </p>              
  <p style="font-weight:bold; font-size:120%">Hier deine Produkt-ID (Kategorie) eintragen: 
  </p>
  <p>
    <input name="prod_id1" value="<?php echo get_option('prod_id1'); ?>" type="text" />
  </p>      
  <p style="font-style:italic">
    <span style="color: red; font-weight: bold">book
    </span> f&uuml;r Bücher (Standard)<br />
    <span style="color: red; font-weight: bold">abook
    </span> f&uuml;r Hörbücher<br />
    <span style="color: red; font-weight: bold">film
    </span> f&uuml;r VHS, DVD etc.<br />
    <span style="color: red; font-weight: bold">music
    </span> f&uuml;r Musik<br />
    <span style="color: red; font-weight: bold">game
    </span> f&uuml;r Spiele
  </p>      
  <h3 style="font-weight:bold; font-size:120%">Hier optional einen Einleitungstext eingeben:<br />
    <span style="font-style:italic">(wird auf der Ausgabeseite als Überschrift h3 gezeigt)
    </span></h3>      
<textarea name="booklook_headline1" cols="30" rows="5"><?php echo get_option('booklook_headline1'); ?></textarea><br />      <h3>Hier enden die Optionen für die einfachste Version<br />
    <span style="font-style:italic">(150 Titel einer Produktart)
    </span></h3>             <h4>Anzeigelimit von bis</h4>    
  <?php echo $_POST['booklook_limitFrom1']; ?>
<!-- Hilfesequenz-->               
  <a onclick="toggleVisibility('bb_limit_tip');" title="Für Hilfe klicken!" style="cursor:pointer;">Hilfe zu Anzeigelimit</a><br />      
  <div id="bb_limit_tip" style="font-style:italic; font-size:110%; display:none">             
    <span>Hier kannst du festlegen von wo, bis wohin und wieviele deiner Artikel auf dieser Liste erscheinen. Diese Einstellung macht vor allem fü die Nutzer einen Sinn, die mehr als 150 Artikel bei Booklooker anbieten. Da die Ausgabe pro Abruf seitens Booklooker auf 150 Artikel beschränkt ist, können so mehrere Seiten mit jeweils 150 Artikeln angzeigt werden.<br /><br />Das bedeutet, dass eine 0 im Feld "ab lfd. Nr." ab dem 1. Artikel und eine bliebige Zahl bis 149 im Feld "bis lfd. Nr." die ersten 150 Artikel deiner Booklooker-Angebote anzeigt.
    </span>             
    <ul style="list-style-type:disc; list-style-position:inside">      
      <li>Trage in das Feld "ab lfd. Nr." die Zahl ein, ab der die Liste angezeigt werden soll (Beispiel: Zahl zwischen 0 und 149)
      </li>      
      <li>Trage in das Feld "bis lfd. Nr." die Zahl ein, bis zu der die Liste angezeigt werden soll.
      </li>      
    </ul>      
  </div>
<!-- Hilfesequenz Ende-->               
  <p>
    <input name="booklook_limitFrom1" value="<?php echo get_option('booklook_limitFrom1'); ?>" type="text" />
    <label>ab lfd. Nr.
    </label>
  </p>      
  <p>
    <input name="booklook_limit1" value="<?php echo get_option('booklook_limit1'); ?>" type="text" />
    <label>bis lfd. Nr.
    </label>
  </p>             
  <input style="color:#1b4a95; font-size:120%; font-weight:bold; background-color:#ececec; border-style:outline; border-width:2px; border-color:#1b4a95" type="submit" value="Speichern" /><br />      
  <p style="color:red; font-style:italic; font-size:120%">Danach diesen Shortcode: 
    <span style="color:black; font-weight:bold; font-style:normal">[book_bot_short_1]
    </span> in eine Seite (z. B.: Neue Seite mit Standardtemplate erstellen)<br /> oder in einen Artikel an einer Stelle deiner Wahl einfügen.
  </p>      
  <h3 style="text-align:center"><br />
    <span style="font-style:italic;"> * * * * * * * * * * * 
    </span><br />Weitere Optionen für eine Ober- und Unterkategorien spezifizierte Seite<br />
    <span style="font-style:italic">(150 Titel einer Ober- oder Unterkategorie)
    </span></h3>      
  <p style="font-weight:bold; font-size:120%">Ober-/Unterkategorie wählen (optional):
  </p>      
<?php 
        $radio_checked = get_option('booklook_sparte1');
        if($radio_checked == "sparte1ID"){
        $radio_checked_sparte1ID = " checked='checked'";
        }else{
        $radio_checked_sparte1ID = "";
        }
        if($radio_checked == "sparteID"){
        $radio_checked_sparteID = " checked='checked'";
        }else{
        $radio_checked_sparteID = "";
        }
        if($radio_checked == "keine"){
        $radio_checked_keine = " checked='checked'";
        }else{
        $radio_checked_keine = "";
        }
        ?>
<!-- Hilfesequenz -->              
  <a onclick="toggleVisibility('bb_get_sparte_tip');" title="Für Hilfe klicken!" style="cursor:pointer;">Hilfe zu sparte1ID und sparteID</a><br />      
  <div id="bb_get_sparte_tip" style="font-style:italic; font-size:110%; display:none">             
    <span style="font-weight:bold">Wie findest Du die sparte1ID oder sparteID?
    </span>             
    <ul style="list-style-type:disc; list-style-position:inside">      
      <li>Gehe genauso vor wie bei der uID (siehe oben).
      </li>      
      <li>Klicke auf der Seite mit all deinen Angeboten auf den Link mit deinem Anbieternamen.
      </li>      
      <li>Klicke dort auf "alle Sparten des Verkäufers".
      </li>      
      <li>Beim Überfahren (ist meist l.u. der Link zusehen)<br />oder Anklicken (Link in der Adresszeile des Browsers zu sehen)<br />der angezeigten Kategorieen, kannst Du erkennen, ob hier<br />eine "sparte1ID="<br />oder eine "sparteID="<br />gefolgt von einer Nummer vorliegt.
      </li>      
      <li>Beispiele:<br />Oberkategorie: Kinder-/Jugendbücher entspricht -->> sparte1ID=17<br />oder Unterkatregorie: Bilderbücher entspricht -->> sparteID=625)
      </li>      
    </ul>             
  </div>
<!-- Hilfesequenz Ende-->        
  <p>
    <input type="radio" name="booklook_sparte1" value="sparte1ID"<?php echo $radio_checked_sparte1ID; ?> /> = Oberkategorie (sparte1ID)<br />      
    <input type="radio" name="booklook_sparte1" value="sparteID"<?php echo $radio_checked_sparteID; ?> /> = Unterkategorie (sparteID)<br />      
    <input type="radio" name="booklook_sparte1" value="keine"<?php echo $radio_checked_keine; ?> /> = keine (Standard)
  </p>      
  <p style="font-weight:bold; font-size:120%">Hier Nummer der Sparte1ID oder SparteID eintragen: 
    <p>
      <input name="booklook_sparteID1" value="<?php echo get_option('booklook_sparteID1'); ?>" type="text" />(Nummer der Sparte)<br />      
      <input style="color:#1b4a95; font-size:120%; font-weight:bold; background-color:#ececec; border-style:outline; border-width:2px; border-color:#1b4a95" type="submit" value="Speichern" /><br />
      <p style="color:red; font-style:italic; font-size:120%">Danach diesen Shortcode: 
        <span style="color:black; font-weight:bold; font-style:normal">[book_bot_short_1]
        </span> in eine Seite (z. B.: Neue Seite mit Standardtemplate erstellen)<br /> oder in einen Artikel an einer Stelle deiner Wahl einfügen.
      </p>      
      <input name="action" value="insert1" type="hidden" />    
</form>