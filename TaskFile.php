<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class TaskFile extends \Encore\Development\Tasks
{
    // define public methods as commands
    
    public function watch()
    {
        $this->taskWatch()
            ->monitor('composer.json', function() {
                $this->taskComposerUpdate()->run();
            })->run();
    }
}