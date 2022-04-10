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
                <div class="container">
                    <h3 class="typewriter"><a href="index.php">Enter the encrypted word:</a></h3> 
                </div>
                <br>
                <input type="text" name="encrypted-word" id="textfield"> 
                <input type="submit" id="submit-btn">
            </form> 
        </div> 
        <br>
        <?php
            include 'caesar.php';
            $wordEntered = $_GET["encrypted-word"];
            if (!empty($wordEntered)) { 
                $wordEntered = $_GET["encrypted-word"];
                $decryptedWords = findWords($wordEntered);
                echo '<div id="decrypted">';
                echo "\n\t\t\t<h4>".count($decryptedWords)." valid decryption(s) were found...</h4>";
                echo "\n\t\t\t".'<ul class="list">';
                for ($i = 0; $i < count($decryptedWords); $i++) 
                    echo "\n\t\t\t\t".'<li>'.$decryptedWords[$i]."</li>";
                echo "\n\t\t\t</ul>\n\t\t</div>";
            }
        ?>  
    </body> 
</html>