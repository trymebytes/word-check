<?php
//require the Checker class
require_once 'classes/Checker.php';

$checkString = new Checker;

//Check if a string is a Palindrome
var_dump($checkString->isPalindrome('abba'));

//Check if a string is an Anagram
//first parameter is the word and second parameter is the comparison (one we are checking if it's an anagram)
//var_dump($checkString->isAnagram('coalface','ocaac elf'));

//Check if a string is a Pangram 
//var_dump($checkString->isPangram('The quick brown fox jumps over the lazy dog'));




?>