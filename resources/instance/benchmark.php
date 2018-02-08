<?php

$start = microtime(true);
echo "Started at $start\n";

echo "Performing write tests\n";

mkdir(__DIR__ . '/writes/');
for ( $i = 0; $i <= 5000; $i++ ) {
    file_put_contents(__DIR__ . "/writes/$i", bin2hex(random_bytes(10000)));
}

$end = microtime(true);
echo "Finished write tests\n";

$duration = number_format($end-$start, 4);
echo "5000 files written in ${duration}s\n";
//rmdir(__DIR__ . '/writes');
