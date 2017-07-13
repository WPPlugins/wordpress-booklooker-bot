<?php
//bb_books Routine für die Produktart Bücher
/**************Zusammenstellung Book **************/
?>
<table class="wpbb_table">
<?php
  $wpbb1 = 0;
  foreach($xml_data->Book as $Book) { 
      //Neu oder gebraucht auswerten      
      if($Book->New == 0){
        $New = "Gebraucht";    
      }elseif
      ($Book->New == 1){
        $New = "Neu";
      }
      
/*****Wenn kein Bild, dann Standardbild*********/
      $bookpic="";
      $bookpic = $Book->PicURL;
      if($bookpic == ""){
      $bookpic = plugins_url('book_standard.png', __FILE__ );
      }
/*******************xml to Vari******************/
/*************Verhindert leere Ausgaben**********/
/************************************************/

/***********alt-tag Format***********************/
$bb_alt_author = " von " . $Book->Author;
/************normale Ausgabe*********************/
$bb_title = $Book->Title;
if(isset($Book->Author)) ($bb_author = $Book->Author . "<br />");
if(isset($Book->Publisher)) ($bb_publisher = "Verlag: " . $Book->Publisher);
if(isset($Book->Year)) ($bb_year = "Jahr: " . $Book->Year . "<br />");
if(isset($Book->Edition)) ($bb_edition = "Edition: " . $Book->Edition . "<br />");
if(isset($Book->ISBN)) ($bb_isbn = "ISBN: " . $Book->ISBN . "<br />");
$bb_zustand = "Zustand: " . $New;

/*******************Ausgabe**********************/      
?>
      
      <tr title="Um die Details zu sehen oder das Buch zu kaufen hier klicken." class="item_wpbb" onmouseover="style.backgroundColor='#eeeeee'" onmouseout="style.backgroundColor=''" onClick="window.open('<?php echo $Book->DetailLinkUrl; ?>')" style="cursor: pointer;">
      
      <td class="details_wpbb"><a class="info2_wpbb" href="#"><img class="img_wpbb3" src="<?php echo $bookpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_author; ?>" /><span><img class="img2_wpbb" src="<?php echo $bookpic; ?>" alt="<?php echo 'Bildtext: ' . $bb_title . $bb_alt_author; ?>" /></span></a></td>
      
      <td class="details_wpbb2"><h4 class="wpbb_h4"><?php echo $bb_title; ?></h4><?php echo $bb_author . $bb_publisher;?></td>
      <td class="details_wpbb3"><?php echo $bb_year . $bb_edition . $bb_isbn . $bb_zustand; ?></td>
      <td class="details_wpbb4">
      <?php

      // Komma für Punkt
      $bb_preis = $Book->Price;
      $bb_preis = strtr($bb_preis, ".", ",");
      $bb_spreis = $Book->ShippingPrice;
      $bb_spreis = strtr($bb_spreis, ".", ",");

      //infotext wenn vorhanden
      ?>
      <a class="info_wpbb" href="#">
      <?php      
      if(strlen($Book->Infotext)>1){
      $bb_infotext = $Book->Infotext;
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
/**************Zusammenstellung Book Ende**************/    
  
?>