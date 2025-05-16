<?php

// Create a test file in public/test-env.php

$app_env = env('APP_ENV');
$is_production = app()->environment('production');

echo "APP_ENV: " . $app_env . "<br>";
echo "Is Production: " . ($is_production ? 'Yes' : 'No') . "<br>";
echo "Generated Vite Tags:<br>";
echo "<pre>";
echo htmlspecialchars(vite(['resources/css/app.css', 'resources/js/app.js']));
echo "</pre>";