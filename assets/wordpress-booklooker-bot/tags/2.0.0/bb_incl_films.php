<?php
//bb_Films Routine für die Produktart Film
/**************Zusammenstellung Film **************/
?>
<table class="wpbb_table">
<?php
  $wpbb1 = 0;
  foreach($xml_data->Film as $Film) { 
      //Neu oder gebraucht auswerten      
      if($Film->New == 0){
        $New = "Gebraucht";    
      }elseif
      ($Film->New == 1){
        $New = "Neu";
      }
      
      ///Wenn kein Bild, dann Standardbild
      $Filmpic="";
      $Filmpic = $Film->PicURL;
      if($Filmpic == ""){
      $Filmpic = plugins_url('film_standard.png', __FILE__ );
      }
      
/*******************xml to Vari******************/
/*************Verhindert leere Ausgaben**********/
/************************************************/

/***********alt-tag Format***********************/
$bb_alt_director = " von " . $Film->director;
/************normale Ausgabe*********************/
$bb_title = $Film->Title;
if(isset($Film->Director)) ($bb_director = $Film->Director . "<br />");
if(isset($Film->Year)) ($bb_year = "Jahr: " . $Film->Year . "<br />");
if(isset($Film->Format)) ($bb_format = "Format: " . $Film->Format . "<br />");
if(isset($Film->EAN)) ($bb_ean = "EAN: " . $Film->EAN . "<br />");
$bb_zustand = "Zustand: " . $New;      
      
/*******************Ausgabe***************/      
?>
      
      <tr title="Um die Details zu sehen oder den Film zu kaufen hier klicken." class="item_wpbb" onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor=''" onClick="window.open('<?php echo $Film->DetailLinkUrl; ?>')" style="cursor: pointer;">
      
      <td class="details_wpbb"><a class="info2_wpbb" href="#"><img class="img_wpbb3" src="<?php echo $Filmpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_director; ?>" /><span><img class="img2_wpbb" src="<?php echo $Filmpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_director; ?>" /></span></a></td>
      
      <td class="details_wpbb2"><h4 class="wpbb_h4"><?php echo $bb_title; ?></h4><?php echo $bb_director; ?></td>
      <td class="details_wpbb3"><?php echo $bb_year . $bb_format . $bb_ean . $bb_zustand; ?></td>
      <td class="details_wpbb4">
      <?php

      // Komma für Punkt
      $preis = $Film->Price;
      $preis = strtr($preis, ".", ",");
      $spreis = $Film->ShippingPrice;
      $spreis = strtr($spreis, ".", ",");

      //infotext wenn vorhanden
      ?>
      <a class="info_wpbb" href="#">
      <?php      
      if(strlen($Film->Infotext)>1){
      $infotext = $Film->Infotext;
      
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
/**************Zusammenstellung Film Ende**************/    
  
?>