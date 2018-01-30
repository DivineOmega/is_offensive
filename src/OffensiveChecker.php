<?php

namespace DivineOmega\IsOffensive;

use Snipe\BanBuilder\CensorWords;


class OffensiveChecker
{   
    public function isOffensive($text)
    {
        $censor = new CensorWords;
        $censor->setDictionary(['en-uk', 'en-us']);
        $censor->addWhiteList(['hello']);

        $results = $censor->censorString($text);

        if (count($results['matched']) > 0) {
            return true;
        }

        return false;
    }
}