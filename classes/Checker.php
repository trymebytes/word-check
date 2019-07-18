<?php

class Checker {

    //Check if a word is a palindrome
    public function isPalindrome($word){
        if(is_string($word) && $word !== ''){
        //convert $word to an array of its letters in lowercase
            $wordArray = str_split(strtolower($word));

            //reverse array
            $reversedWordArray = array_reverse($wordArray, false);

            //check if original word array is the same as the reversed array, comparing each key value
            if ($wordArray == $reversedWordArray){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
        
        
    }

    //check if a word is an anagram if the comparison
    public function isAnagram($word, $comparison){
        if(is_string($word) && is_string($comparison) && $word != '' && $comparison != ''){
            $lowerWord = strtolower($word);
            //remove space from $comparison and convert all to lowercase
            $noSpaceComparison = str_replace(' ', '',$comparison);

            $lowerWordArray = str_split($lowerWord);
            $comparisonArray = str_split($noSpaceComparison);
            
            //sort both arrays
            sort($lowerWordArray); 
            sort($comparisonArray); 

            //check if word has exactly same characters with $comparison
            if($lowerWordArray == $comparisonArray){
                return true;
            }
            else{
                return false;
            }
        }
         else{
            return false;
        }

    }

    //check if a word is a pangram
    public function isPangram($phrase){
        if(is_string($phrase)  && $phrase != ''){
            //$engAlphabets variable holds all the english alphabet letters from a to z in lower case
            $engAlphabets = range('a','z');

            //remove space from $phrase
            $noSpacePhrase = str_replace(' ','',$phrase);

            //convert $noSpacePhrase to an array of its letters in lower case
            $phraseArray = str_split(strtolower($noSpacePhrase));
            
        //$result is an array of unique letters of the $phraseArray that exist in the $engAlphabets array at least once
            $result = array_intersect($engAlphabets, $phraseArray);

            //check if the $results array has 26 elements (English Alphabets has 26 letters)
            if(count($result) == 26){
                return true;
            }
            else{
                return ($result);
            }
        }
         else{
            return false;
        }
        
    }
}




?>