<?php

$fonts= array(
    'zynsansrg' => 'ttf/zynsans_rg.ttf',
    'zynsansbd' => 'ttf/zynsans_bd.ttf'
);

if ( !isset($_REQUEST['f']) ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}else{
    $req = $_REQUEST['f'];
}

$abort = false;

if ( !array_key_exists($req , $fonts) ) {
    $abort = true;
} else {
    header("Access-Control-Allow-Origin: *");               // Set allowed origin
    header("Access-Control-Allow-Methods: GET, OPTIONS");   // Allow specific HTTP methods
    header("Access-Control-Allow-Headers: Content-Type");   // Allow specific headers
    header("Access-Control-Allow-Credentials: true");       // Allow credentials (cookies, authorization headers)
    header("Access-Control-Max-Age: 86400");                // Set max age for preflight requests (in seconds)

    // Handle preflight OPTIONS request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        // Just exit with 200 OK status
        exit(0);
    }
    $fontPath = $fonts[$req];       // Path to your font file

    // Check if file exists
    if (!file_exists($fontPath)) {
        $abort = true;
    } else {
        header('Content-Type: font/ttf');   // Set the content type for TTF fonts
        header('Content-Disposition: attachment; filename="' . basename($fontPath) . '"');  // Set Content-Disposition to attachment for some browsers
        header('Content-Length: ' . filesize($fontPath));   // Set the content length        
        // Disable caching for development (you might want to enable caching in production)
        // header('Cache-Control: max-age=31536000, public'); // 1 year caching for production
        header('Cache-Control: no-cache, no-store, must-revalidate'); // For development
 
        // Output the file
        readfile($fontPath);
    }
}


if($abort){
    // Return 404 if font doesn't exist
    header('HTTP/1.0 404 Not Found');
    exit;
}
