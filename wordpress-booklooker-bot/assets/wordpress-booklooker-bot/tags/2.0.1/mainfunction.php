<?php
/*****************function booklooker_bot*************/

//Ausgabe Produkt-Kategorie

//mit Limit die Anzahl der angezeigten Produkte festlegen

if(isset($limitFrom)){
$limit_From = "&limitFrom=" . $limitFrom;
}elseif
  (isset($limitFrom1)){
  $limit_From = "&limitFrom=" . $limitFrom1;
  }elseif
    (isset($limitFrom2)){
    $limit_From = "&limitFrom=" . $limitFrom2;
    }elseif
       (isset($limitFrom3)){
        $limit_From = "&limitFrom=" . $limitFrom3;
        }elseif
          (isset($limitFrom4)){
          $limit_From = "&limitFrom=" . $limitFrom4;
          }elseif
            (isset($limitFrom5)){
            $limit_From = "&limitFrom=" . $limitFrom5;
}       

if(isset($limit)){
$limit_To = "&limit=" . $limit;
}elseif
  (isset($limit1)){
  $limit_To = "&limit=" . $limit1;
  }elseif
    (isset($limit2)){
    $limit_To = "&limit=" . $limit2;
    }elseif
        (isset($limit3)){
        $limit_To = "&limit=" . $limit3;
        }elseif
          (isset($limit4)){
          $limit_To = "&limit=" . $limit4;
          }elseif
            (isset($limit5)){
            $limit_To = "&limit=" . $limit5;
}

//Auslesen
if(!isset($prod_ID)){           
$xml_data = simplexml_load_file("https://api.booklooker.de/interface/search.php?pid=6513412&uID=" . $uID . $limit_From . $limit_To);
}

if(isset($prod_ID)){
$xml_data = simplexml_load_file("https://api.booklooker.de/interface/search.php?pid=6513412&uID=" . $uID . "&medium=" . $prod_ID . $limit_From . $limit_To);

}
if($sparte=="sparte1ID"){
$xml_data = simplexml_load_file("https://api.booklooker.de/interface/search.php?pid=6513412&uID=" . $uID . "&medium=" . $prod_ID . "&catID=" . $sparte1ID . $limit_From . $limit_To);
}
if($sparte=="sparteID"){
$xml_data = simplexml_load_file("https://api.booklooker.de/interface/search.php?pid=6513412&uID=" . $uID . "&medium=" . $prod_ID . "&subCatID=" . $sparteID . $limit_From . $limit_To);
}

//Wenn Produkte vorhanden
if(count($xml_data)==0){
echo "<h2>Zur Zeit gibt es hier kein Angebot!</h2>";
}else{
//Je nach Produkten andere Tabellenfelder und Gestaltung 
  //Books 
  if(($prod_ID=="book")||($prod_ID=="")){
  include("bb_incl_books.php"); 
  }
  
  //ABooks
  if($prod_ID=="abook"){
  include("bb_incl_abooks.php"); 
  } 
  
  //Film
  if($prod_ID=="film"){
  include("bb_incl_films.php"); 
  }
  
  //Music
  if($prod_ID=="music"){
  include("bb_incl_music.php"); 
  } 
     
  //Games
  if($prod_ID=="game"){
  include("bb_incl_games.php"); 
  } 
    
}
/*****************function booklooker_bot*************/
?>