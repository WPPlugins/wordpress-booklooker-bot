<?php
//bb_Music Routine für die Produktart Musikmedien
/**************Zusammenstellung Music **************/
?>
<table class="wpbb_table">
<?php
  $wpbb1 = 0;
  foreach($xml_data->Music as $Music) { 
      //Neu oder gebraucht auswerten      
      if($Music->New == 0){
        $New = "Gebraucht";    
      }elseif
      ($Music->New == 1){
        $New = "Neu";
      }
      
      ///Wenn kein Bild, dann Standardbild
      $Musicpic="";
      $Musicpic = $Music->PicURL;
      if($Musicpic == ""){
      $Musicpic = plugins_url('music_standard.png', __FILE__ );
      }
      
/*******************xml to Vari******************/
/*************Verhindert leere Ausgaben**********/
/************************************************/

/***********alt-tag Format***********************/
$bb_alt_artist = " von " . $Music->Artist;
/************normale Ausgabe*********************/
$bb_title = $Music->Title;
if(isset($Music->Artist)) ($bb_artist = $Music->Artist . "<br />");
if(isset($Music->Label)) ($bb_label = $Music->Label . "<br />");
if(isset($Music->Year)) ($bb_year = "Jahr: " . $Music->Year . "<br />");
if(isset($Music->Format)) ($bb_format = "Format: " . $Music->Format . "<br />");
if(isset($Music->EAN)) ($bb_ean = "EAN: " . $Music->EAN . "<br />");
$bb_zustand = "Zustand: " . $New;      
      
/*******************Ausgabe***************/      
?>
      
      <tr title="Um die Details zu sehen oder die Musik zu kaufen hier klicken." class="item_wpbb" onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor=''" onClick="window.open('<?php echo $Music->DetailLinkUrl; ?>')" style="cursor: pointer;">
      
      <td class="details_wpbb"><a class="info2_wpbb" href="#"><img class="img_wpbb3" src="<?php echo $Musicpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_artist; ?>" /><span><img class="img2_wpbb" src="<?php echo $Musicpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_artist; ?>" /></span></a></td>
      
      <td class="details_wpbb2"><h4 class="wpbb_h4"><?php echo $bb_title; ?></h4><?php echo $bb_artist . $bb_label; ?></td>
      <td class="details_wpbb3"><?php echo $bb_year . $bb_format . $bb_ean . $bb_zustand; ?></td>
      <td class="details_wpbb4">
      <?php

      // Komma für Punkt
      $preis = $Music->Price;
      $preis = strtr($preis, ".", ",");
      $spreis = $Music->ShippingPrice;
      $spreis = strtr($spreis, ".", ",");

      //infotext wenn vorhanden
      ?>
      <a class="info_wpbb" href="#">
      <?php      
      if(strlen($Music->Infotext)>1){
      $infotext = $Music->Infotext;
      
      echo '<img class="img_wpbb" src="' .plugins_url( 'info_text_96px.png' , __FILE__ ). '" /> ';
      ?>
      <span>
      <?php
      echo $infotext; ?></span>      
      <?php   
      }else{
      $infotext = "";
      }
      ?>
      </a>
      <span class="preise"><?php echo "Preis(&euro;): " . $preis; ?></span>
      <br /><span class="preise"><?php echo "Versand(&euro;): " . $spreis; ?></span></td>
</tr>
            
<?php
      $wpbb1 = $wpbb1+1;
  }                                                   
?>
</table>
<div class="distance"></div>
  
<?php   
/**************Zusammenstellung Music Ende**************/    
  
?>