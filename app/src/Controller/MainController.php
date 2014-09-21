<?php

namespace App\Controller;

class MainController extends BaseController
{
    protected $view = 'main';

    public function calculateEaster()
    {
        $year = (string)$this->year;

        if ($year < 1970 or $year > 2037) {
            return alert('This app only works for years between 1970 and 2037', 'Invalid Date');
        }

        $date = date('l jS F Y \W\e\e\k\: W', easter_date($year));

        $this->easter = $date;
    }
}
