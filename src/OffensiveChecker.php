<?php

namespace DivineOmega\IsOffensive;

use Snipe\BanBuilder\CensorWords;
use function GuzzleHttp\json_decode;

class OffensiveChecker
{
    private $censor;

    public function __construct()
    {
        $this->censor = new CensorWords();
        $this->setupBadWords();
        $this->setupWhiteList();
    }

    private function setupBadWords()
    {
        $this->censor->setDictionary(['en-uk', 'en-us', __DIR__.'/BadWordsLoader.php']);
    }

    private function setupWhiteList()
    {
        $words = json_decode(file_get_contents(__DIR__.'/../resources/WhiteList.json'));

        foreach ($words as $word) {
            $words[] = strtoupper($word);
            $words[] = ucwords($word);
        }

        $this->censor->addWhiteList($words);
    }

    public function isOffensive($text)
    {
        $results = $this->censor->censorString($text);

        return count($results['matched']) > 0;
    }
}
