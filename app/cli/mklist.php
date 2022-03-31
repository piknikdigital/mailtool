#!/usr/bin/php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x mklist.php
 *      3.- run the script as: ./mklist.php
 *          Example:  ./mklist.php
 */

// DESCRIPTION
// 
// Reads current folder looking for images (JPG, GIF, PNG) and 
// displays a json to be used as YY.XX-replacements.json


// php /Users/armandoromero/Documents/devF1/mailtool.lan/app/cli/mklist.php > 22.3-replacements.json
       

function getImagesList($dir)
{
    $r = array();
    $files  = scandir($dir);
    foreach( $files as $file)
    {
        if ( $file != "." && $file != ".." )
        {
            $a = explode('.', $file );
            $e = strtolower(end($a));
            if ( $e =="png" || $e =="jpg" || $e =="gif" )
                $r[] = $file;
        }
    }
    return $r;
}

$images = getImagesList( getcwd() );
$f1='{
    "replacements" : 
    [';
$f3='
    ]
}';
$f2= "";

foreach( $images as $i )
{
    $f2 .= '
        {
            "HTML"       : "'. $i .'",
            "FSH"        : "",
            "DCE"        : ""
        }';
    if ($i !== end($images)) {
        $f2 .= ',';
    }
}
echo $f1 . $f2 . $f3 .PHP_EOL;




//print_r($files);

