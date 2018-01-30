<?php

namespace DivineOmega\IsOffensive;

use Snipe\BanBuilder\CensorWords;
use function GuzzleHttp\json_decode;


class OffensiveChecker
{   
    private $censor;

    public function __construct()
    {
        $this->censor = new CensorWords;
        $this->setupBadWords();
        $this->setupWhiteList();
    }

    private function setupBadWords()
    {
        $this->censor->setDictionary(['en-uk', 'en-us', __DIR__.'/BadWordsLoader.php']);
    }

    private function setupWhiteList()
    {
        $this->censor->addWhiteList(json_decode(file_get_contents(__DIR__.'/../resources/WhiteList.json')));
    }

    public function isOffensive($text)
    {
        $results = $this->censor->censorString($text);

        return (count($results['matched']) > 0);
    }
}