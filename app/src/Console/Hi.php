<?php

namespace App\Console;

use Encore\Console\Command;

class Hi extends Command
{
    protected $name = 'hi';
    protected $description = 'Example command';

    protected $greetings = [
        'Oh hai!',
        'Hello world',
        'Hi',
        'Hello'
    ];

    public function fire()
    {
        $this->info($this->greetings[array_rand($this->greetings)]);
    }
}