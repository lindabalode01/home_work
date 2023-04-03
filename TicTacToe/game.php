<?php
$playing = true;
$game = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];
function printGame($game) {
    for($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo ' ' . $game[$i][$j] . ' ';
            if ($j != 2) {
                echo '|';
            }
        }
        echo "\n";
        if ($i != 2) {
            echo '-----------' . "\n";
        }
    }
}
$userMove = 'X';
$computerMove = 'O';
$isUserTurn = true;

$computerRow = rand(0, 2);
$computerCol = rand(0, 2);
function isValidMove($game, $row, $col): bool{
     if($game[$row][$col] == '-'){
         return true;
     } return false;
}
function checkWin($game): bool{
    // check rows
    for ($row = 0; $row < 3; $row++) {
        if ($game[$row][0] != "-" && $game[$row][0] == $game[$row][1] && $game[$row][1] == $game[$row][2]) {
            echo "{$game[$row][0]} won \n";
            return true;
        }
    }
// check columns
    for ($colum = 0; $colum < 3; $colum++) {
        if ($game[0][$colum] != "-" && $game[0][$colum] == $game[1][$colum] && $game[1][$colum] == $game[2][$colum]) {
            echo "{$game[0][$colum]} won \n";
            return true;
        }
    }
// check diagonals
    if ($game[0][0] != "-" && $game[0][0] == $game[1][1] && $game[1][1] == $game[2][2]) {
        echo "{$game[0][0]} won \n";
        return true;
    }
    if ($game[0][2] != "-" && $game[0][2] == $game[1][1] && $game[1][1] == $game[2][0]) {
        echo "{$game[2][0]} won \n";
        return true;
    }
    return false;
}
while ($playing) {
    printGame($game);
    $userRow = readline("Enter number 0 - 2 to select row: \n");
    $userCol = readline("Enter number 0 - 2 to select colum: \n");
    if (isValidMove($game, $userRow, $userCol)) {
        $game[$userRow][$userCol] = $userMove;
        printGame($game);
        $isUserTurn = false;
    }
    $computerRow = rand(0, 2);
    $computerCol = rand(0, 2);
    if(isValidMove($game, $computerRow, $computerCol)){
        $game[$computerRow][$computerCol] = $computerMove;
        printGame($game);
    }
if(checkWin($game)){
    $playing = false;
}
}

