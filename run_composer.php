<?php
$output = [];
$return_var = 0;

// Run Composer install
exec('php composer.phar install 2>&1', $output, $return_var);

// Display the output
echo "<pre>";
echo "Output:\n" . implode("\n", $output);
echo "\nReturn Code: $return_var";
echo "</pre>";
?>
