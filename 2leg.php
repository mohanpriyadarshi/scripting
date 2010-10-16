#!/usr/bin/env php
<?php
// Include the PHP SDK for YSP library.
#include_once("yosdk/lib/Yahoo.inc");
require dirname(__FILE__).'/../lib/Yahoo.inc';

// Define constants to store your API Key (Consumer Key) and
// Shared Secret (Consumer Secret).
#define("API_KEY","dj0yJmk9cVp6WlFhYXphdXM4JmQ9WVdrOVZXdFlTWE5MTnpBbWNHbzlPRFF6T0RFMU5qWXkmcz1jb25zdW1lcnNlY3JldCZ4PWNj");
define("API_KEY","dj0yJmk9WUxnRFhpcnlQRE9uJmQ9WVdrOVYwMHlWM1Y2TlRBbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD03Yw--");
define("SHARED_SECRET","848c9431c8dc38d7fe129fc46206c89aff655510");

// The YahooApplication class is used for two-legged authorization, 
// which doesn't need permission from the end user.
$two_legged_app = new YahooApplication(API_KEY,SHARED_SECRET);
if ($two_legged_app == NULL) {
   // Print error message and and then exit the script.
   print ("<br />");
   print ("Error: Cannot get two_legged_app (YahooApplication object)."); 
   exit;
}

// Define queries for Flickr and an RSS news feed
$news_feed = 
  "select * from rss where url='http://rss.news.yahoo.com/rss/topstories' and title LIKE \"%China%\"";

#$news_feed = 
#"select * from partner.finance.charts where symbol='BADSYMBOL'" ;
echo "<h2>RSS Data</h2>";
$newsResponse = $two_legged_app->query($news_feed);
echo "<pre>";
var_dump($newsResponse);
echo "</pre>";

if ($newsResponse==NULL) {
   print ("<p>");
   print ("newsResponse is NULL."); 
   print ("Check your API Key (Consumer Key) and Shared Secret (Consumer Secret)");
   print (" Also, make sure your query is valid.");
   print ("</p>");
}
?>
