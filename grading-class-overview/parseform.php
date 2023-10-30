<?php
use App\Student;

require_once __DIR__. '/vendor/autoload.php';

if(isset($_POST['php'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $php = $_POST['php'];
    $java = $_POST['java'];
    $nodejs = $_POST['nodejs'];
    $ruby = $_POST['ruby'];
    $cpp = $_POST['cpp'];

    $student = new Student($id, $name);
    $student->setMarks($php, $java, $nodejs, $ruby, $cpp);

}