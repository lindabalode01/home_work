<?php
$board = [
    ['-', '-', '-', '-'],
    ['-', '-', '-', '-'],
    ['-', '-', '-', '-']
];
$symbols = ["X", "O", "$"];
$value = [
    "X" => 5,
    "O" => 10,
    "$" => 20
];
$money = 100;
$symbol = null;
function printBoard($board) {
    for($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
            echo ' ' . $board[$i][$j]. ' ';
            if ($j != 3) {
                echo '|';
            }
        }
        echo "\n";
        if ($i != 2) {
            echo '----------------' . "\n";
        }
    }
}
function checkWinning($board): bool{
    global $symbol;
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
            $symbol = $board[$i][0];
            echo "Wining symbol $symbol\n";
            return true;
        }
    }
    for ($j = 0; $j < 4; $j++) {
        if ($board[0][$j] == $board[1][$j] && $board[1][$j] == $board[2][$j]) {
            $symbol = $board[0][$i];
            echo "Wining symbol $symbol\n";
            return true;
        }
    }
    if ($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        $symbol = $board[0][0];
        echo "Wining symbol $symbol\n";
        return true;
    }
    if ($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        $symbol = $board[0][2];
        echo "Wining symbol $symbol\n";
        return true;
    }
    return false;
}
echo 'Welcome to slot machine!' . PHP_EOL;
readline("Press Enter to start the game ");

while($money >= 0) {

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $board[$i][$j] = $symbols[array_rand($symbols)];
        }
    }
    printBoard($board);
    if (checkWinning($board)) {
        echo "Congratulations! You won $" . $value[$symbol] . "!\n";
        $money += $value[$symbol];
    } else {
        echo "Sorry, you didn't win this time.\n";
        $money -= 10;
    }

    echo "You now have $" . $money . ".\n";
    readline("To play again press Enter" );

}