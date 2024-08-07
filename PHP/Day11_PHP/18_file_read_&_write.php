<?php

    // file create
    $file = fopen('sample.txt', 'w'); // file process // w => write
    fwrite ($file, "This is testing message");

    // file read
    $file = fopen('sample.txt', 'r');
    echo fread ($file, filesize('sample.txt')); // file size full
    // display with echo what is inside the file