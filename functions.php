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
    $doc->loadHTMLFile($filename);
    $xpath = new DOMXpath($doc);


    $elements = $xpath->query("//*[@id='__APOLLO_STATE__']");
    if (!is_null($elements)) {
      foreach ($elements as $element) {
        $nodeName= $element->nodeValue;
               
        $nodes = $element->childNodes;
        foreach ($nodes as $node) {
          echo $node->nodeValue. "\n"; //nodeValue fallisce perchè la stringa è troppo lunga
          echo $node->nodeName. "\n";
        }
      }
    }
}

// ProcessLine1 non funziona perchè non trova il testo dello script
function ProcessLine2($path){
    $filename = trim($path)."index.html";
    try {
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
    //echo $contents;
    fclose($handle);
    
    $apollo="";
    preg_match_all('#<script(.*?)<\/script>#ims', $contents, $outs);
    $n= count ($outs);
    if ($n>=1) {
    echo $n ."<br/>";
    foreach ($outs[0] as $out) {
       $apollo = implode('',$outs[0]);
        echo $apollo;
    }}

}

// ProcessLine1 non funziona perchè non trova il testo dello script
function ProcessLine3($path){
    $filename = trim($path)."index.html";
    $doc = new DOMDocument();
    $doc->loadHTMLFile($filename);
    $xpath = new DOMXpath($doc);

//*[@id="pdHeader"]/h1
    
    $elements = $xpath->query("//*[@id=\"pdHeader\"]/h1/span[2]");
    //class="styled__TextNormal-aohf13-6 cnjxne"
    if (!is_null($elements)) {
      foreach ($elements as $element) {
        $nodeName= $element->nodeName;
        $nodeValue= $element->nodeValue; 
        $nodes = $element->childNodes;
        foreach ($nodes as $node) {
          echo $node->nodeValue. "\n"; //nodeValue fallisce perchè la stringa è troppo lunga
          echo $node->nodeName. "\n";
        }
      }
    }
}

function utf8_fopen_read($fileName) {
    $fc = iconv('windows-1250', 'utf-8//TRANSLIT', file_get_contents($fileName));
    $handle=fopen("php://memory", "rw");
    fwrite($handle, $fc);
    fseek($handle, 0);
    return $handle;
}

function get_all_records(){
    $con = getdb();
    $Sql = "SELECT * FROM employeeinfo";
    $result = mysqli_query($con, $Sql);  


    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>EMP ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Registration Date</th>
                        </tr></thead><tbody>";


     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr><td>" . $row['emp_id']."</td>
                   <td>" . $row['firstname']."</td>
                   <td>" . $row['lastname']."</td>
                   <td>" . $row['email']."</td>
                   <td>" . $row['reg_date']."</td></tr>";        
     }
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
 if(isset($_POST["Export"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'First Name', 'Last Name', 'Email', 'Joining Date'));  
      $query = "SELECT * from employeeinfo ORDER BY emp_id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
}

 ?>