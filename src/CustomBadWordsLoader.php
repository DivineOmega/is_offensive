<?php

$badwords = array_merge($badwords, json_decode(file_get_contents(sys_get_temp_dir().'CustomBadWords.json')));
