<?php
include_once('C:\wamp\www\simplehtmldom_1_5\simple_html_dom.php');

//echo file_get_html('http://www.math.ucsd.edu/~mgross/109/')->plaintext;
$html = file_get_html('http://www.math.ucsd.edu/~mgross/109/');
//$html = file_get_html('http://www.math.ucsd.edu/~mgross/109/', $use_include_path = false, $context=null, $offset = -1, $maxLen=-1, $lowercase = true, $forceTagsClosed=true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN=true, $defaultBRText=DEFAULT_BR_TEXT);
//echo file_get_html('http://www.math.ucsd.edu/~mgross/109/', $use_include_path = false, $context=null, $offset = -1, $maxLen=-1, $lowercase = true, $forceTagsClosed=true, $target_charset = DEFAULT_TARGET_CHARSET, $stripRN=true, $defaultBRText=DEFAULT_BR_TEXT);



//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('body');

//get text and add <br/> then remove last <br/>
$lines = $nodes->item(0)->nodeValue;

//split it by newlines
$lines = explode("\n", $lines);


//add <br/> at end of each line
foreach($lines as $line)
    $output = $line . "<br/>";

//remove last <br/>
$output = rtrim($output, "<br/>");

//display it
var_dump($output);
echo $output
?>