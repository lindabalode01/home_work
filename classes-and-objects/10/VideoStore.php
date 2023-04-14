<?php
require_once 'Video.php';
class VideoStore
{
private array $videos;
public function  add(Video $title): void
{
    $this->videos[] = $title;
}
public function checkOut(string $title): bool
{
    foreach($this->videos as $video){
        /** @var Video $video    */
        if($video->getTitle() == $title && !$video->getCheckedOut() )
        {
            $video->checkOut();
            return true;
        }
    }return false;
}
public function returnVideo(string $title):bool
{
    foreach($this->videos as $video){
        /** @var Video $video    */
        if($video->getTitle() == $title && $video->getCheckedOut() )
        {
            $video->return();
        }

    }
}
}