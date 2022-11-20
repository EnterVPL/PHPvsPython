<?php

class CodeTimer
{
    private float $timeStart;
    private float $timeStop;

    public function __construct(private string $id)
    {
    }

    public function start() : void
    {
        $this->timeStart = microtime(true);
    }

    public function stop() : void
    {
        $this->timeStop = microtime(true);
    }

    public function result() : string
    {
        $time = $this->timeStop - $this->timeStart;
        return "{$this->id}: {$time} sek";
    }
}

$codeTimer = new CodeTimer('Point 1');

$codeTimer->start();

$data = file_get_contents('data/data.json');
$data = json_decode($data);

$codeTimer->stop();

echo $codeTimer->result() . "\n";