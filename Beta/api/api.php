<?php
require 'vendor/autoload.php';

use TANIOS\Airtable\Airtable;

$airtable = new Airtable(array(
    'api_key'   => 'keyjTObjWhni5eyct',
    'base'      => 'appIOoRGHjkxi8YvD',
));

$ID = 0;
$request = $airtable->getContent('new_customers');
do {
    $response = $request->getResponse();
    
    foreach($response['records'] as $item) {
        if($ID < (int)$item->fields->ID) $ID = (int)$item->fields->ID;
    }
} while($request = $response->next());

// Create an array with all the fields you want 
$new_contact_details = array(
    'ID' => $ID + 1,
    'First_Name' => $_POST["First_Name"],
    'Last_Name' => $_POST["Last_Name"],
    'Facebook' => $_POST["Facebook"],
    'Instagram' => $_POST["Instagram"],
    'WhatsApp' => (empty($_POST['WhatsApp']) ? Null : (int)$_POST['WhatsApp']),
    'Messenger' => $_POST["Messenger"],
    'Twitter' => $_POST["Twitter"],
    'Snapchat' => $_POST["Snapchat"],
    'TikTok' => $_POST["TikTok"],
    'LinkedIn' => $_POST["LinkedIn"],
    'Pinterest' => $_POST["Pinterest"],
    'Spotify' => $_POST["Spotify"],
    'Youtube' => $_POST["Youtube"],
    'Onlyfans' => $_POST["Onlyfans"],
    'Depop' => $_POST["Depop"],
    'Flickr' => $_POST["Flickr"],
    'Tumblr' => $_POST["Tumblr"],
    'Reddit' => $_POST["Reddit"],
    'Phone' => (empty($_POST['Phone']) ? Null : (int)$_POST['Phone']),
    'Email' => $_POST["Email"]
);

// Save to Airtable
$new_contact = $airtable->saveContent( "new_customers", $new_contact_details );
// echo $new_contact->id;

echo "success";