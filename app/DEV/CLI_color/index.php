
<?php
// Custom function for colored output
function consoleMessage($str, $type = 'i') {
    switch ($type) {
        case 'e': // error
            // echo "\033[31m$str \033[0m\n";
            echo "\033[1;33;;41m$str\033[0m\n" ;
            break;
        case 's': // success
            // echo "\033[32m$str \033[0m\n" ;
            echo "\033[1;33;;42m$str\033[0m\n" ;
            break;
        case 'w': // warning
            // echo "\033[33m$str \033[0m\n" ;
            echo "\033[1;93;;103m$str\033[0m\n" ;
            break;
        case 'i': // info
            echo "\033[36m$str \033[0m\n" ;
            break;
        case 'x': // x
            echo "\033[1;33;4;44m$str\033[0m\n" ;
            break;
        case 'y': // y
            echo "\033[38;5;33;48;5;41m$str\033[0m\n" ;
            break;

        case 'y1': // y  ESTO NO FUNCIONA
            // \033[38;2;<r>;<g>;<b>m     #Select RGB foreground color
            // \033[48;2;<r>;<g>;<b>m     #Select RGB background color
            // \033[38;2; 255;82;197;   48;2;155;106;0mHello
            //         38;2;  RGB       48;2; RGB
            echo "\033[38;2; 255;82;197;   48;2;155;106;0m"   . $str . "\033[0m\n";
            // echo "\033[38;2;255;255;255;48;2;255;0;0m$str\033[0m\n" ;
            break;
    

        case 'z': // y
            echo "$str\n" ;
            break;
    
        

        default:
            // Handle other cases if needed
            break;
    }
}


// $ echo -e "\e[31m Red Text\e[0m"
// $ echo -e "\e[42mGreen Background\e[0m"
// $ echo -e "\e[1;34mLight Blue Text\e[0m"

// \e[1; 33; 4; 44   m
//       t   u  bg    
// $ echo -e "\e[1;33;4;44mYellow Underlined Text on Blue Background\e[0m"


// Sample mock data for testing
$errorMessage = "This is an error message";
$successMessage = "This is a success message";
$warningMessage = "This is a warning message";
$infoMessage = "This is an info message";
$xMessage = "This is an X message";
$yMessage = "This is an Y message";
$y1Message = "This is an Y1 message";
$zMessage = "This is an Z message";

// Usage examples
consoleMessage($errorMessage, 'e');
consoleMessage($warningMessage, 'w');
consoleMessage($infoMessage, 'i');
consoleMessage($xMessage, 'x');
consoleMessage($successMessage, 's');
consoleMessage($y1Message, 'y1');
consoleMessage($zMessage, 'z');


