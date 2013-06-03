<?php

/**
 * Likkle
 *
 * Likkle is a composer compatible PHP client library for the lk2.in
 *  URL shortener service (http://lk2.in).
 *
 * @author bobbyallen.uk@gmail.com (Bobby Allen)
 * @version 1.0.0
 * @license http://opensource.org/licenses/MIT
 * @link https://github.com/bobsta63/likkle
 * @link http://www.bobbyallen.me
 *
 */
require_once '../src/Ballen/Likkle/Lk2inClient.php';

use Ballen\Likkle\Lk2inClient;

$lk2client = new Lk2inClient;


/**
 * You can optioanlly configure a proxy server (both non-authenticated and authenticated!)
 */
//$lk2client->setProxyHost('proxy.example.com')->setProxyAuth('your_username', 'your_password');


/**
 * Example of creating a standard short URL.
 */
$thenewurl = $lk2client->getShortURL('https://github.com/bobsta63/likkle');
echo "Your new URL is: <a href=\"" . $thenewurl . "\">" . $thenewurl . "</a>.";

// Raw examplexample of outputting the repsonse in plaintext.
//echo "Raw request was: <br>" . $lk2client->getRawResponse();
// Vardump of the repsonse object:-
//echo "Response object is: <br>" . var_dump($lk2client->getResponseObject());

/**
 * Example of creating a new short URL and ensuring that it has it's own 'click counter' instead of using the global click counter.
 */
//$lk2client->forceNewCounter();
//$thenewurl = $lk2client->getShortURL('www.zpanelcp.com');
//echo "Your new URL is: <a href=\"" . $thenewurl . "\">" . $thenewurl . "</a>";

/**
 * Example of parsing an entire message with embedded links and dynamically replacing them with new short URLs.
 */
/**
  $post_body = "There was a really awesome video on YouTube the other day, it was found here: <a href=\"www.youtube.com/\">link to video</a> but then again I also found some really cool things over at argos of which looked like http://www.argos.co.uk/static%2FBrowse%2FID72%2F33018398%2Fc_1%2F1%257Ccategory_root%257CClothing%257C33006249%2Fc_2%2F2%257C33006249%257CGirls and then a standard link like http://www.jewson.co.uk. I'm just playing :)";
  //$lk2client->forceNewCounter();
  $new_body = $lk2client->getShortURLReplacementInString($post_body);

  echo "<p><strong>Original post body: Lengh: " . strlen($post_body) . "</strong></p><p><em>";
  echo $post_body . "</em>";
  echo "</p><p><strong>Replaced body: Lengh: " . strlen($new_body) . "</strong></p><p><em>";
  echo $new_body . "</em></p>";
 */
?>
