<?php

/**
 * ............/´¯/)...............(\¯`\
 * .........../...//....ЗДОХНИ.....\\...\
 * ........../...//......ФАШИСТ.....\\... \
 * ...../´¯/..../´¯\...ЕБАНЫЙ../¯` \....\.....\´¯\
 * .././.../..../..../.|_......._|.\....\....\...\.\
 * (.(....(....(..../..)..).....(..(.\....)....)....).)
 * .\................\/.../......\...\/................/
 * ..\.................. /.........\................../
 */

if (is_dir(__DIR__ . '/files') == true) {
    echo "Directory '/files' already exists" . PHP_EOL;
} else {
    echo "Create directory /files" . PHP_EOL;

    try {
        mkdir(__DIR__ . '/files');
    } catch (Exception $e) {
        echo "Cannot create directory /files!" . PHP_EOL . "Check permission on read/write for ./" . __DIR__ . PHP_EOL;
    }
}

try {
    echo "Set permission for directory /files" . PHP_EOL;

    chmod(__DIR__ . '/files', 0777);
} catch (Exception $e) {
    echo "Cannot set permission for directory /files" . PHP_EOL;
}
