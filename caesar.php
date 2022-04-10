<?php

    function wordExists($wordToCheck) {
        $context = stream_context_create(array(
            'http' => array('ignore_errors' => true),
        ));
        $result = file_get_contents('https://www.merriam-webster.com/dictionary/'.$wordToCheck, false, $context);
        if (substr_count($result, 'class="spelling-suggestion-text"') > 0) 
            return 0;
        if (substr_count($result, 'class="secondary"') > 0) 
            return 0;
        if (substr_count($result, 'abbreviation'))
            return 0;
        return 1;
    }

    function performCaesarShift($stringToShift, $shift) {
        $revised = "";
        for ($i = 0; $i < strlen($stringToShift); $i++) {
            $revised .= chr(((ord($stringToShift[$i]) + 7 + $shift) % 26) + 97);
        }
        return $revised;
    }

    function findWords($wordEntered) {
        $decryptedWords = [];
        for ($shift_amt = 0; $shift_amt < 26; $shift_amt++) 
            if (wordExists(performCaesarShift($wordEntered, $shift_amt))) 
                array_push($decryptedWords, performCaesarShift($wordEntered, $shift_amt));
        return $decryptedWords;  
    }

?>
