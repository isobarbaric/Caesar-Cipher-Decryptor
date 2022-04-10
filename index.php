<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Caesar Cipher Decryptor</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Open+Sans&family=Source+Code+Pro&family=Space+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="input">
            <form action="index.php" method="GET">
                <h3>Enter the encrypted word:</h3> 
                <input type="text" name="encrpyted-word" id="textfield"> 
                <input type="submit" id="submit-btn">
            </form> 
        </div> 
        <br>
        <?php
            include 'caesar.php';
            $wordEntered = $_GET["encrpyted-word"];
            if (!empty($wordEntered)) { 
                $wordEntered = $_GET["encrpyted-word"];
                $decryptedWords = findWords($wordEntered);
                echo '<div id="decrypted">'."\n".'<ul>'."\n";
                echo count($decryptedWords)." word(s) were found...\n";
                for ($i = 0; $i < count($decryptedWords); $i++) 
                    echo "\n\t\t<li>".$decryptedWords[$i]."</li>";
                echo "\n\t</ul>\n";
            }
        ?>
    </body>
</html>