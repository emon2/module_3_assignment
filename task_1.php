<?php
$text = "The quick brown fox jumps over the lazy dog.";
function string_manupulation($text) {
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    return $text;
}
echo string_manupulation($text);
?>