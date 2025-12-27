<?php

require_once __DIR__ . '/../src/db.php';

$migrationsFolder = __DIR__ . '/../db/';

$migrations = scandir($migrationsFolder);

$migrations = array_filter($migrations, fn($item) => $item !== '.' && $item !== '..');

foreach ($migrations as $migration) {
    $sqlContent = file_get_contents($migrationsFolder . $migration);
    $query = mysqli_query($connection, $sqlContent);
    printf('Migration with name: \'%s\' migrated successfully' . PHP_EOL, $migration);
}
