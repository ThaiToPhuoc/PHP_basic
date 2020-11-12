<?php
// Array with names
$a[] = "Thai";
$a[] = "Khoa";
$a[] = "Anh";
$a[] = "Binh";
$a[] = "Cuong";
$a[] = "Duy";
$a[] = "Huong";
$a[] = "Giang";
$a[] = "Lien";
$a[] = "Minh";
$a[] = "Nam";
$a[] = "Oanh";
$a[] = "Phuong";
$a[] = "Quanh";
$a[] = "Sinh";
$a[] = "Uyen";
$a[] = "Vy";
$a[] = "Xuyen";
$a[] = "Yen";

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