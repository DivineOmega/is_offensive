<?php

$badwords = array_merge($badwords, json_decode(file_get_contents(__DIR__.'/../resources/BadWords.json')));
