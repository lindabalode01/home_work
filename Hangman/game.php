<?php

$playing = true;
$words = [
    'flower',
    'homework'
];
$index = array_rand($words, 1);
$randWord = $words[$index];
//echo $randWord;
$rightLetters = [];
$numOfGuesses = 0;
$maxGuesses = 5;

echo 'Word has: '.strlen($randWord).' letters.'.PHP_EOL;
echo 'Word '.str_repeat("_", strlen($randWord)).PHP_EOL;

while($playing) {

    echo "====================\n";
//take users guess
    $usersGuess = readline("Guess a letter: ");

    // validate user's input
    if (strlen($usersGuess) != 1) {
        echo "Please enter a single letter.\n";
        continue;
    }

// check if letter exists in the word,m if yes add it to array with correct letters
    if (strpos($randWord, $usersGuess) - 1) {
        $rightLetters[] = $usersGuess;
        echo "Correct guess!\n";
    }else if(in_array($usersGuess, $rightLetters)){
        echo "You already have this letter \n";
    } else {
 //if letter does not exist the number of guesses goes down
        $numOfGuesses++;
        echo 'Wrong! You have '.($maxGuesses - $numOfGuesses).' guesses left.'.PHP_EOL;
    }

//update the printed word
    $showWord = "";
    for($i = 0; $i < strlen($randWord); $i++){
        if(in_array($randWord[$i], $rightLetters)){
            $showWord .= $randWord[$i] . " ";
        }else{
            $showWord .= "_";
        }
    }
    echo 'Word '.$showWord.PHP_EOL;

    //check if game is over, after 5 guesses
    if($numOfGuesses > $maxGuesses){
        echo 'You lost! The word was: '.$randWord.PHP_EOL;
        $playing = false;
    }elseif (strpos($showWord, "_") === false) {
        echo "You win! The word was \"" . $randWord . "\".\n";
        exit;
    }
}



