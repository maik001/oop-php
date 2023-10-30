<?php

class Video {
    private $type;
    private $duration;
    protected $published=false;
    private $title;
    private $playStatus;

    public function __construct(string $type, float $duration, string $title)
	{
		$this->type = $type;
		$this->duration = $duration;
		$this->title = $title;
	}

    public function getType() 
    {
        return $this->type;
    }

    public function setType(String $type)
    {
        $this->type = $type;
    }

    public function getDuration() 
    {
        return $this->duration;
    }

    public function setDuration(float $duration) 
    {
        $this->duration = $duration;
    }

    private function getPublished()
    {
        return $this->published;
    }

   public function setPublished(bool $state) 
    {
        $this->published = $state;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title) 
    {
        $this->title = $title;
    }

    public function play() 
    {
        if($this->getPublished()) {
            $this->playStatus = true;
            return "The video is Playing";
        }
        
        return "The video is not yet available";
    }

    public function pause() 
    {
        return $this->playStatus ? "The video is paused" : "The video isn't playing";
    }

    public function __destruct()
    {
        var_dump('Destroying instance of '. get_class());
    }
}

header('Content-Type: text/plain; charset=UTF-8', true);

$video = new Video('mp4', 10.50, 'Introduction to OOP');
$video->setPublished(true);
$video->setTitle('Test Encapsulation');

echo $video->getTitle(), PHP_EOL;
echo $video->play(), PHP_EOL, $video->pause(), PHP_EOL;
