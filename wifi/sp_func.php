<?php

$jsonString = '[{"ssid":"WLANSSID","rate":"195 Mbit\/s","signal":"100","security":"WPA1 WPA2"},{"ssid":"InternetWifi","rate":"195 Mbit\/s","signal":"100","security":"WPA2"},{"ssid":"FRITZ!Repeater 1200","rate":"130 Mbit\/s","signal":"97","security":"WPA2"},{"ssid":"FRITZ!Repeater 1200","rate":"270 Mbit\/s","signal":"89","security":"WPA2"},{"ssid":"NewTestWifi","rate":"270 Mbit\/s","signal":"55","security":"WPA1 WPA2"},{"ssid":"NewTestWifiGuest","rate":"270 Mbit\/s","signal":"55","security":""},{"ssid":"Tardis","rate":"405 Mbit\/s","signal":"42","security":"WPA2"},{"ssid":"FRITZ!Box Gastzugang","rate":"195 Mbit\/s","signal":"42","security":"WPA2"},{"ssid":"DIRECT-39-HP OfficeJet 4650","rate":"65 Mbit\/s","signal":"40","security":"WPA2"},{"ssid":"Tigerland","rate":"195 Mbit\/s","signal":"40","security":"WPA2"},{"ssid":"FRITZ!Box Gastzugang","rate":"405 Mbit\/s","signal":"30","security":"WPA2"}]';

function getNetworks($jsonString) {
    // Convert the JSON string into a PHP array
    $array = json_decode($jsonString, true);
    // Return the result
    return $array;
}

// $array now contains the converted PHP array
$array = getNetworks($jsonString);




