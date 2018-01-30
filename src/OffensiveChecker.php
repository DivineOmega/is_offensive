<?php

namespace DivineOmega\IsOffensive;

use Snipe\BanBuilder\CensorWords;


class OffensiveChecker
{   
    private $censor;

    public function __construct()
    {
        $this->censor = new CensorWords;
        $this->setupBlackList();
        $this->setupWhiteList();
    }

    private function setupBlackList()
    {
        $this->censor->setDictionary(['en-uk', 'en-us']);
    }

    private function setupWhiteList()
    {
        $this->censor->addWhiteList(['hello']);
    }

    public function isOffensive($text)
    {
        $results = $this->censor->censorString($text);

        return (count($results['matched']) > 0);
    }
}