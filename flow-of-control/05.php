<?php
$usersInputString = readline('Enter a word: ');
$stringUperCases = strtoupper($usersInputString);
$digits = '';
for($i = 0; $i < strlen($stringUperCases); $i++) {
    $character = $stringUperCases[$i];
    switch ($character) {
        case "A":
        case "B":
        case "C":
            $digits .= "2";
            break;
        case "D":
        case "E":
        case "F":
            $digits .= "3";
            break;
        case "G":
        case "H":
        case "I":
            $digits .= "4";
            break;
        case "J":
        case "K":
        case "L":
            $digits .= "5";
            break;
        case "M":
        case "N":
        case "O":
            $digits .= "6";
            break;
        case "P":
        case "Q":
        case "R":
        case "S":
            $digits .= "7";
            break;
        case "T":
        case "U":
        case "V":
            $digits .= "8";
            break;
        case "W":
        case "X":
        case "Y":
        case "Z":
            $digits .= "9";
            break;
        default:
            $digits .= $character;
            break;
    }
}
echo $digits;
