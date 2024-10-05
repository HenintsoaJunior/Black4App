<?php 
require 'vendor/autoload.php';

ParseClient::initialize( "jHL80GULkIzJwlyKS5aatZuDqhzmPUrMYAzeKZTO", "6Qc3Er8HAYkQzhMHzbQLwDgSFiAwq1OcYeDEu7gv", "srRloTo8IGu4YlxFK5TCO3A2F5g9rduGkxWBCxjl" );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');

use Parse\ParseException;
use Parse\ParseObject;

$myCustomObject = new ParseObject("Orders");

$myCustomObject->set("order_id", "1");
$myCustomObject->set("item_name", "dax");
$myCustomObject->set("name", "dax");

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}
?>