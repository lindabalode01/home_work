<?php
$Choices = [
    'rock', 'paper', 'scissors'
];
$playing = true;

while($playing) {
    $index = array_rand($Choices, 1);
    $computerTurn = $Choices[$index];
    $usersTurn = readline("Please select Rock, Paper, Scissors \n");
    while (!in_array($usersTurn, $Choices)) {
        echo "Please select valid option \n";
        $usersTurn = readline("Please select Rock, Paper, Scissors \n");
    }
    echo "Your choice $usersTurn \n";
    echo "Computer chose $computerTurn \n";
    if ($usersTurn == $computerTurn) {
        echo "It is a tie! \n";
    }  else if ($usersTurn == 'Paper' && $computerTurn == 'Rock') {
        echo "You won! \n";
    } else if ($usersTurn == 'Rock' && $computerTurn == 'Scissors') {
        echo "You won! \n";
    } else if ($usersTurn == 'Scissors' && $computerTurn == 'Paper') {
        echo "You won! \n";
    } else{
        echo "You lost! \n";
    }
    $playAgain = readline("Want to play again? Type yes if You do! \n");
    if($playAgain != 'yes'){
        $playing = false;
    }
}
echo "Thanks for playing! \n";




