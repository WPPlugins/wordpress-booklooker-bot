    <form style="width:100%; padding:10px; background-color:#ffffff; border:solid 2px #ececec"; name="bookbot3" method="post" action="<?php echo admin_url( "plugins.php?page=bookbotpl" ); ?>">
      <p style="font-weight:bold; font-size:120%">Hier deine Booklooker UID eintragen: </p>
      <a style="cursor:pointer;" title="Für Hilfe klicken!" onclick="toggleVisibility('bb_get_uID_tip');">Hilfe zur uID</a><br />
      <div style="font-style:italic; font-size:110%; display:none" id="bb_get_uID_tip"><span style="font-weight:bold">Die uID findest du so: </span>
      
      <ul style="list-style-type:disc; list-style-position:inside">
      <li>Melde dich bei Booklooker an und navigiere zu "Mein Depot".</li>
      <li>Klick auf "Meine Angebote".</li>
      <li>Auf der nun angzeigten Seite klickst auf den Link: "Eigene Angebote aus Kundensicht".</li>
      <li>In Deinem Bowser schaust Du nun in der Adresszeile nach einer Nummer, die nach "showAlluID=" steht, das ist Deine uID</li> 
      </ul></div>
      
      <input name="booklook_uid3" value="<?php echo get_option('booklook_uid3'); ?>" type="text" /></p>       
      <p style="font-weight:bold; font-size:120%">Hier deine Produkt-ID (Kategorie) eintragen: </p><input name="prod_id3" value="<?php echo get_option('prod_id3'); ?>" type="text" />
      <span style="font-style:italic">(0 = Bücher (Standard), 1 = Filme, 2 = Tonträger, 3 = Hörbücher, 4 = Spiele)</span>
      <h3 style="font-weight:bold; font-size:120%">Hier optional einen Einleitungstext eingeben:<br /><span style="font-style:italic">(wird auf der Ausgabeseite als Überschrift h3 gezeigt)</span></h3>
      <textarea name="booklook_headline3" cols="30" rows="5" /> <?php echo get_option('booklook_headline3'); ?></textarea><br />
      <h3>Hier enden die Optionen für die einfachste Version<br /><span style="font-style:italic">(100 Titel einer Produktart)</span></h3>
      <input style="color:#1b4a95; font-size:120%; font-weight:bold; background-color:#ececec; border-style:outline; border-width:2px; border-color:#1b4a95" type="submit" value="Speichern" /><br />
      <p style="color:red; font-style:italic; font-size:120%">Danach diesen Shortcode: <span style="color:black; font-weight:bold; font-style:normal">[book_bot_short_3]</span> in eine Seite (z. B.: Neue Seite mit Standardtemplate erstellen)<br /> oder in einen Artikel an einer Stelle deiner Wahl einfügen.</p>
      <h3 style="text-align:center"><br /><span style="font-style:italic";> * * * * * * * * * * * </span><br />Weitere Optionen für eine Ober- und Unterkategorien spezifizierte Seite<br /><span style="font-style:italic">(100 Titel einer Ober- oder Unterkategorie)</span></h3>
      <p style="font-weight:bold; font-size:120%">Ober-/Unterkategorie wählen (optional):</p>
      <?php 
        $radio_checked = get_option('booklook_sparte3');
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
      <a style="cursor:pointer;" title="Für Hilfe klicken!" onclick="toggleVisibility('bb_get_sparte_tip');">Hilfe zu sparte1ID und sparteID</a><br />
      <div style="font-style:italic; font-size:110%; display:none" id="bb_get_sparte_tip">      
      <span style="font-weight:bold">Wie findest Du die sparte1ID oder sparteID?</span>
      
      <ul style="list-style-type:disc; list-style-position:inside">
      <li>Gehe genauso vor wie bei der uID (siehe oben).</li>
      <li>Klicke auf der Seite mit all deinen Angeboten auf den Link mit deinem Anbieternamen.</li>
      <li>Klicke dort auf "alle Sparten des Verkäufers".</li>
      <li>Beim Überfahren (ist meist l.u. der Link zusehen)<br />oder Anklicken (Link in der Adresszeile des Browsers zu sehen)<br />der angezeigten Kategorieen, kannst Du erkennen, ob hier<br />eine "sparte1ID="<br />oder eine "sparteID="<br />gefolgt von einer Nummer vorliegt.</li>
      <li>Beispiele:<br />Oberkategorie: Kinder-/Jugendbücher entspricht -->> sparte1ID=17<br />oder Unterkatregorie: Bilderbücher entspricht -->> sparteID=625)</li>
      </ul>
      
      </div>
      <p><input type="radio" name="booklook_sparte3" value="sparte1ID"<?php echo $radio_checked_sparte1ID; ?> /> = Oberkategorie (sparte1ID)<br />
      <input type="radio" name="booklook_sparte3" value="sparteID"<?php echo $radio_checked_sparteID; ?> /> = Unterkategorie (sparteID)<br />
      <input type="radio" name="booklook_sparte3" value="keine"<?php echo $radio_checked_keine; ?> /> = keine (Standard)</p>
      <p style="font-weight:bold; font-size:120%">Hier Nummer der Sparte1ID oder SparteID eintragen: <p><input name="booklook_sparteID3" value="<?php echo get_option('booklook_sparteID3'); ?>" type="text" />(Nummer der Sparte)<br />
      <input style="color:#1b4a95; font-size:120%; font-weight:bold; background-color:#ececec; border-style:outline; border-width:2px; border-color:#1b4a95" type="submit" value="Speichern" /><br /><p style="color:red; font-style:italic; font-size:120%">Danach diesen Shortcode: <span style="color:black; font-weight:bold; font-style:normal">[book_bot_short_3]</span> in eine Seite (z. B.: Neue Seite mit Standardtemplate erstellen)<br /> oder in einen Artikel an einer Stelle deiner Wahl einfügen.</p>
      <input name="action" value="insert3" type="hidden" />
    </form>