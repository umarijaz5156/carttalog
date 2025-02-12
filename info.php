<?php

// Check if EXIF extension is enabled
if (function_exists('exif_read_data')) {
    echo "EXIF is enabled!<br>";
} else {
    echo "EXIF is not enabled.<br>";
}

// Check if GD library is enabled
if (function_exists('imagecreatefromjpeg')) { 
    echo "GD library is enabled!<br>";
} else {
    echo "GD library is not enabled.<br>";
}

// Check if FileInfo extension is enabled
if (function_exists('finfo_open')) {
    echo "FileInfo extension is enabled!<br>";
} else {
    echo "FileInfo extension is not enabled.<br>";
}

?>