<?php
// Proof-of-concept: aantonen dat PHP uit de repo wordt uitgevoerd.
// Benign - leest alleen, wijzigt niets.
header('Content-Type: text/plain');

echo "PoC: arbitrary PHP execution via repo deploy\n";
echo "Bewijs van uitvoering (geen statische HTML):\n\n";
echo "  Tijd op server : " . date('Y-m-d H:i:s') . "\n";
echo "  Rekenbewijs    : 1337 * 2 = " . (1337 * 2) . "\n";
echo "  PHP versie     : " . PHP_VERSION . "\n";
echo "  Uitvoerende user: " . get_current_user() . "\n";
echo "  Hostname       : " . php_uname('n') . "\n";
