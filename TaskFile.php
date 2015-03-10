<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class TaskFile extends \Encore\Development\Tasks
{
    protected $debug = false;

    // define public methods as commands
    
    public function watch()
    {
        $this->taskWatch()
            ->monitor('composer.json', function() {
                $this->taskComposerUpdate()->run();
            })
            ->monitor([
                'app/bootstrap',
                'app/config',
                'app/database',
                'app/resources',
                'app/src',
                'dev'
            ], function() {

                if ($this->debug) $this->debug->stop();

                $this->debug = $this->taskExec(PHP_BINARY.' bin/encore debug');

                $this->debug->background()->run();

            })
            ->run();
    }
}