<?php
require_once 'VideoStore.php';
class Application
{
    public VideoStore $videostore;
    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
    public function addMovies(){
        $movieName = readline('Enter the name of the movie you would like to add: ');
        $this->videostore->add(new Video($movieName));
    }
    public function rentVideo(){
        $movieForRent = readline('Enter the name of movie you would like to rent: ');
        if($this->videostore->checkOut($movieForRent))
        {
            echo 'You rented '.$movieForRent.PHP_EOL;
        }
        echo 'This movie is not in our inventory'.PHP_EOL;
}
//public function listInventory(){
//
//}
public function returnVideo(){
    $movieToReturn = readline('Enter the name of movie you want to return: ');
    if(!$this->videostore->checkOut($movieToReturn)){
        echo 'You returned: '.$movieToReturn;
    }

}
}