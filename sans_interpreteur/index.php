<?php
$secrets = [
  'DB_HOST' => 'localhost',
  'DB_USER' => 'demo_user',
  'DB_PASS' => 'UltraSecret!123', // secret fictif
];

date_default_timezone_set('Europe/Paris');
$now = date('Y-m-d H:i:s');

header('Content-Type: text/html; charset=UTF-8');

echo "<h1>Démo SANS interpréteur PHP</h1>";
echo "<p>Heure serveur (si exécuté) : {$now}</p>";
echo "<h2>Variables sensibles (ne jamais exposer) :</h2>";
echo "<pre>" . print_r($secrets, true) . "</pre>";

?>
