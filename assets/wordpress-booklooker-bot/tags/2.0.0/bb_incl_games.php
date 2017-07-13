<?php
//bb_Games Routine für die Produktart Games
/**************Zusammenstellung Game **************/
?>
<table class="wpbb_table">
<?php
  $wpbb1 = 0;
  foreach($xml_data->Game as $Game) { 
      //Neu oder gebraucht auswerten      
      if($Game->New == 0){
        $New = "Gebraucht";    
      }elseif
      ($Game->New == 1){
        $New = "Neu";
      }
      
/*****Wenn kein Bild, dann Standardbild*********/
      $Gamepic="";
      $Gamepic = $Game->PicURL;
      if($Gamepic == ""){
      $Gamepic = plugins_url('game_standard.png', __FILE__ );
      }
/*******************xml to Vari******************/
/*************Verhindert leere Ausgaben**********/
/************************************************/

/***********alt-tag Format***********************/
$bb_alt_author = " von " . $Game->Author;
/************normale Ausgabe*********************/
$bb_title = $Game->Title;
if(isset($Game->Author)) ($bb_author = $Game->Author . "<br />");
if(isset($Game->Year)) ($bb_year = "Jahr: " . $Game->Year . "<br />");
if(isset($Game->Edition)) ($bb_edition = "Edition: " . $Game->Edition . "<br />");
if(isset($Game->EAN)) ($bb_isbn = "EAN: " . $Game->EAN . "<br />");
$bb_zustand = "Zustand: " . $New;

/*******************Ausgabe**********************/      
?>
      
      <tr title="Um die Details zu sehen oder das Buch zu kaufen hier klicken." class="item_wpbb" onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor=''" onClick="window.open('<?php echo $Game->DetailLinkUrl; ?>')" style="cursor: pointer;">
      
      <td class="details_wpbb"><a class="info2_wpbb" href="#"><img class="img_wpbb3" src="<?php echo $Gamepic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_author; ?>" /><span><img class="img2_wpbb" src="<?php echo $Gamepic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_author; ?>" /></span></a></td>
      
      <td class="details_wpbb2"><h4 class="wpbb_h4"><?php echo $bb_title; ?></h4><?php echo $bb_author . $bb_publisher;?></td>
      <td class="details_wpbb3"><?php echo $bb_year . $bb_edition . $bb_isbn . $bb_zustand; ?></td>
      <td class="details_wpbb4">
      <?php

      // Komma für Punkt
      $bb_preis = $Game->Price;
      $bb_preis = strtr($bb_preis, ".", ",");
      $bb_spreis = $Game->ShippingPrice;
      $bb_spreis = strtr($bb_spreis, ".", ",");

      //infotext wenn vorhanden
      ?>
      <a class="info_wpbb" href="#">
      <?php      
      if(strlen($Game->Infotext)>1){
      $bb_infotext = $Game->Infotext;
      echo '<img class="img_wpbb" src="' . plugins_url( 'info_text_96px.png' , __FILE__ ) . '" />';
      ?>
      <span>
      <?php
      echo $bb_infotext; ?></span>      
      <?php   
      }else{
      $bb_infotext = "";
      }
      ?>
      </a>
      <p class="preise"><?php echo "Preis(&euro;): " . $bb_preis; ?></p>
      <p class="preise"><?php echo "Versand(&euro;): " . $bb_spreis; ?></p></td>
</tr>
            
<?php
      $wpbb1 = $wpbb1+1;
  }                                                   
?>
</table>
<div class="distance"></div>
  
<?php   
/**************Zusammenstellung Games Ende**************/    
  
?>