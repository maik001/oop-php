<?php

class Video {
    public $type;
    public $duration;
    public $published=false;
    public $title;

    // define um construtor onde no momento da instanciação devem ser passados valores
    // para os parâmetros a fim de atribuir o valor às propriedades da classe
    public function __construct(string $type, float $duration, string $title)
	{
		$this->type = $type;
		$this->duration = $duration;
		$this->title = $title;
	}

    public function play() {
        return $this->published ? "The video is playing" : "The video is not available";
    }

    public function pause() {
        return $this->published ? "The video is paused" : " ";
    }

    public function __destruct()
    {
        var_dump('Destroying instance of '. get_class());
    }
}

// define que o arquivo será exibido como texto pelo navegador
// header('Content-Type: text/plain; charset=UTF-8', true);

// instancia a classe e passa os parâmetros para o construtor
// PHP_EOL -> quebra de linha
$video = new Video('mp4', 10.30, 'Introduction to OOP');
var_dump($video);

$video2 = new Video('mp4', 13.00, 'The Second Video');
var_dump($video2);
