<?php
// Array with names
$a[] = "Muranga Bursary Available";
$a[] = "Nairobi Bursary not available";
$a[] = "Nyeri Bursary not available";
$a[] = "Kirinyaga Bursary not available";
$a[] = "Nyeri Bursary not available";
$a[] = "Laikipia Bursary not available";
$a[] = "Nakuru Bursary not available";
$a[] = "Machakos Bursary not available";
$a[] = "Kericho Bursary not available";
$a[] = "Mombasa Bursary not available";
$a[] = "Baringo Bursary not available";
$a[] = "Lamu Bursary not available";
$a[] = "Kirifi Bursary not available";
$a[] = "Kiambu Bursary not available";
$a[] = "Turkana Bursary not available";
$a[] = "Taita Taveta Bursary not available";
$a[] = "Uasin Gishu Bursary not available";
$a[] = "Nandi Bursary not available";
$a[] = "Marsabit Bursary not available";
$a[] = "Kitui Bursary not available";
$a[] = "Nyandarua Bursary not available";
$a[] = "Kajiando Bursary not available";
$a[] = "Kisumu Bursary not available";
$a[] = "Bomet Bursary not available";
$a[] = "Kitale Bursary not available";
$a[] = "Voi Bursary not available";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?> 