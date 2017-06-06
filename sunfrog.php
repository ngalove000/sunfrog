<?php
error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING);

ini_set('memory_limit', '-1');
set_time_limit(0);
date_default_timezone_set('Asia/Ho_Chi_Minh');

include 'libs/Curl/CaseInsensitiveArray.php';
include 'libs/Curl/Curl.php';
include 'libs/Curl/MultiCurl.php';

include 'libs/DiDom/Document.php';
include 'libs/DiDom/Query.php';
include 'libs/DiDom/Element.php';

use \Curl\Curl;
use \DiDom\Document;
use \DiDom\Query;
use \DiDom\Element;


?>
<form method="post">
  <input type="text" name="key" value="">
  <br>
  <br>
  <button type="submit" name="button">OK</button>
</form>

<?php
if(isset($_POST['button']))
{
$key = $_POST['key'];
$url = "https://www.sunfrog.com/search/?search=".$key;
if(get_web_page($url,$content)){
  // echo $content;

  $dom = new Document();
  $dom->load($content);
  $lists = $dom->find('div[class=frameitWrapper]');
  // echo $lists;
  foreach ($lists as $list)
  {

    $title = $list->find('strong[class=text-info title_display]')[0]->text();
    echo $title;
    echo "</br></br>";
    $link = $list->find('a')[0]->getAttribute('href');
    echo $link;
    echo "</br></br>";
    $img = $list->find('img')[0]->getAttribute('data-src');
    echo "<img src='".$img."'>";
    echo "</br></br>";
    $folder_path = 'data';

    $ext = pathinfo($img, PATHINFO_EXTENSION);

    $file = $folder_path.'/'.trim($title).'.'.$ext;
    save_image($img,$file);
  }
  }
}
function save_image($img,$fullpath){
	$ch = curl_init ($img);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	$rawdata=curl_exec($ch);
	curl_close ($ch);
	if(file_exists($fullpath)){
		unlink($fullpath);
	}
	$fp = fopen($fullpath,'x');
	fwrite($fp, $rawdata);
	fclose($fp);
}


function get_web_page( $url, &$content )
{
	$ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';
	$options = array(
		CURLOPT_USERAGENT 	   => $ua,
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        // CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
        );

	$ch      = curl_init( $url );
	curl_setopt_array( $ch, $options );
	$content = curl_exec( $ch );
	$err     = curl_errno( $ch );
	$errmsg  = curl_error( $ch );
	$header  = curl_getinfo( $ch );
	curl_close( $ch );

	$header['errno']   = $err;
	$header['errmsg']  = $errmsg;
	$header['content'] = $content;
	return $header;
}


?>
