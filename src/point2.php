<?php
require_once 'point1.php';

class Sentence
{
    private string $data = '';

    public function concat(string $data) : void
    {
        $this->data .= $data;
    }

    public function __toString()
    {
        return $this->data;
    }
}

$codeTimer = new CodeTimer('Point 2');
$codeTimer->start();
$sentence = new Sentence;

foreach ($data->users as $user) {
    foreach($user->description as $word) {
        $sentence->concat($word);
    }
}
$codeTimer->stop();
echo $codeTimer->result() . "\n";

var_dump(strlen($sentence));
