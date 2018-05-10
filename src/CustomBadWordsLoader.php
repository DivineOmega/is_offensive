<?php

$badwords = array_merge($badwords, json_decode(file_get_contents('/tmp/CustomBadWords.json')));
