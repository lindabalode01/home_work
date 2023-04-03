<?php
$choices = [
    'rock', 'paper', 'scissors', 'lizard', 'spock'
];
$rules = [
    'rock'=>['scissors', 'lizard'],
    'paper'=>['rock', 'spock'],
    'scissors'=>['paper', 'lizard'],
    'lizard'=>['paper', 'spock'],
    'spock'=>['rock', 'scissors']
    ];
$playing =true;
while($playing) {
    $index = array_rand($choices);
    $computer = $choices[$index];
    $user = readline("Choose rock, paper, scissors, lizard, spock: \n");
    if (in_array($user, $choices)) {
        echo "Invalid choice\n";
    }
    echo "Computer chose $computer \n";
    if($computer == $user){
        echo "It is a tie \n";
    }else if(in_array($computer, $rules[$user])){
        echo "You won \n";
        $playing = false;
    }else{
        echo "You lost \n";
        $playing = false;
    }
}

