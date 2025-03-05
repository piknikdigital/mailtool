<?php
// https://piknik.com.mx/customers/pmm/webfonts/zynsansrg.php

// Set allowed origin
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: GET, OPTIONS");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type");

// Allow credentials (cookies, authorization headers)
header("Access-Control-Allow-Credentials: true");

// Set max age for preflight requests (in seconds)
header("Access-Control-Max-Age: 86400");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Just exit with 200 OK status
    exit(0);
}

// Path to your font file
// $fontPath = 'fonts/my-font.ttf';
$fontPath = 'ttf/zynsans_rg.ttf';

// /var/www/vhosts/piknik.com.mx/httpdocs/customers/pmm/webfonts/ttf/zynsans_rg.ttf
// /var/www/vhosts/piknik.com.mx/httpdocs/customers/pmm/webfonts/ttf/zynsans_bd.ttf

// Check if file exists
if (file_exists($fontPath)) {
    // Set the content type for TTF fonts
    header('Content-Type: font/ttf');
    
    // Set Content-Disposition to attachment for some browsers
    header('Content-Disposition: attachment; filename="' . basename($fontPath) . '"');
    
    // Set the content length
    header('Content-Length: ' . filesize($fontPath));
    
    // Disable caching for development (you might want to enable caching in production)
    // header('Cache-Control: max-age=31536000, public'); // 1 year caching for production
    header('Cache-Control: no-cache, no-store, must-revalidate'); // For development
    
    // Output the file
    readfile($fontPath);
} else {
    // Return 404 if font doesn't exist
    header('HTTP/1.0 404 Not Found');
    echo 'Font file not found';
}