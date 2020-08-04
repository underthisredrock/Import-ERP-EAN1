<?php

include('simple_html_dom.php');
 
// get DOM from URL or file
// $html = file_get_html('http://www.google.com/');

// find all link
// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';

// find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
// echo $html->plaintext;

// ProcessLine non funziona perchè non trova il testo dello script
function ProcessLine($path){
    $filename = trim($path)."index.html";
    $html = file_get_html($filename);
    $a = $html->find('script#__APOLLO_STATE__');
    $script=$a->plaintext;
    echo $script;
}

// ProcessLine1 non funziona perchè non trova il testo dello script
function ProcessLine1($path){
    $filename = trim($path)."index.html";
    $doc = new DOMDocument();
     try {
        $doc->loadHTMLFile($filename);
        $xpath = new DOMXpath($doc);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  

    $elements = $xpath->query("//*[@id='__APOLLO_STATE__']");
    if (!is_null($elements)) {
      foreach ($elements as $element) {
        $json= $element->nodeValue;
        $err=GetValues($json);
        echo $err;
      }
    }
}

// GetValues legge i valori dal json e li scrive sul DB
function GetValues($json){
    
try {
        $obj=(json_decode($json));
        
    } 
    catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
  
    $ROOT_QUERY= $obj->{'ROOT_QUERY'};
    $ProductSsrData= $ROOT_QUERY->{'ProductSsrData'};
    $tobj= $obj->{$ProductSsrData->id};
    $id=$tobj->{'id'};
    
    var_dump('id = '.$id) ;
    
    $id_stringa = strval($id);
    var_dump('id_stringa = '.$id_stringa) ;
    
    $product_coded = ('Product:' . $id_stringa);
    var_dump('product_coded = '.$product_coded) ;
    
    $tobj= $obj->{$product_coded};
    
    $brand=$tobj->{'brand'};
    var_dump('brand = '.$brand) ; 

    $brand_id = $tobj ->{'brandId'};
    var_dump('brand_id = '.$brand_id) ; 
   
    $product_websites = $tobj ->{'url'};
    var_dump('product_websites = '.$product_websites) ; 
    
    $collection = $tobj ->{'collection'};
    var_dump('collection = '.$collection) ; 
    
    $annotation = $tobj ->{'annotation'};
    var_dump('annotation = '.$annotation) ; 
    
    $subName = $tobj ->{'subName'};
    var_dump('subName = '.$subName) ; 
    
    $code = $tobj ->{'code'};
    var_dump('code = '.$code) ; 

    $categoryPath = $tobj ->{'categoryPath'};
    var_dump('categoryPath = '.$categoryPath) ; 

    $kind = $tobj ->{'kind'};
    var_dump('kind = '.$kind) ;   
    
    $ttobj = null;
    $ttobj = $tobj -> {'category'};
    $category = $ttobj -> {'json'};
 
//   var_dump($category) ;   
 // foreach($category as $cat) {var_dump($cat);}
   
    $category0 = $category [0];
    $category1 = $category [1];
    
    $categories = ($category0.','.$category1);
    var_dump('categories = '.$categories) ;
    
    $ttobj = null;
    $ttobj = $tobj -> {'subCategory'};
    $subcategory = $ttobj -> {'json'};
    $subcategory0 = $subcategory [0];
    $subcategory1 = $subcategory [1];
    
    $subcategories = ($subcategory0.','.$subcategory1);
    var_dump('subcategories = '.$subcategories) ;
 
    $marketType = $tobj ->{'marketType'};
    var_dump('marketType = '.$marketType) ;   
    
    $manufacturer = $tobj ->{'manufacturer'};
    var_dump('manufacturer = '.$manufacturer) ;   
    
    $description = $tobj ->{'description'};
    var_dump('$description = '.$description) ; 
    
    $unit = $tobj ->{'unit'};
    var_dump('$unit = '.$unit) ; 
    
    $unitAmount = $tobj ->{'unitAmount'};
    var_dump('$unitAmount = '.$unitAmount) ; 
    
    $orderUnit = $tobj ->{'orderUnit'};
    var_dump('$orderUnit = '.$orderUnit) ; 
    
    $variant_prod_code = ('$Variant:'.$id_stringa.'.price');
    var_dump('$variant_prod_code = '.$variant_prod_code) ; 
    
    $tobj = NULL;
    $tobj= $obj->{$variant_prod_code};
    
    $price_value = $tobj -> {'value'};
    var_dump('$price_value = '.$price_value) ; 
    
    $price_currency = $tobj -> {'currency'};
    var_dump('$price_currency = '.$price_currency) ; 
    
    $price_tax = $tobj -> {'tax'};
    var_dump('$price_tax = '.$price_tax) ; 

   
    
    
    
   // metodo inserimento in DB 

    // $sqlInsert = "INSERT INTO `catalogo`(`categoryId`, `metaTitle`, 
    //`metaKeywords`, `metaDescription`, `categoryCZ`, `categoryName`, 
    //`URLKey`, `language`, `smallImage`, `image`, `description`, `summary`) 
    //VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    // $paramType = "ssssssssssss";
    // $paramArray = array( $categoryId, $metaTitle, $metaKeywords, 
    //$metaDescription, $categoryCZ, $categoryName, $URLKey, $language, 
    //$smallImage, $image, $description, $summary);
    // $insertId = $db->insert($sqlInsert, $paramType, $paramArray);

    //     if (! empty($insertId)) {
    //     $type = "success";
    //     $message = "Data Imported into the Database";
    // } else {
    //     $type = "error";
    //     $message = "Problem in Importing Data";
    //     }
    // }

    
    
    }

 ?>