<?php

// echo "hola!\n";
// exit;

// if($_POST['formSubmit'] == "Submit")
// {
//    $varMovie = $_POST['formMovie'];
//    $varName = $_POST['formName'];
//    $varGender = $_POST['formGender'];
//    $errorMessage = ""; 
// }

// if ( isset( $_POST['submit'] ) ) {

    echo "<h1>POST VALUE:</h1>";
    echo "<div style=\"font-size:24px;\"><PRE>". var_export($_POST, true) . "</PRE></div>";
    echo "<hr>";


    echo "<h1>REQUEST VALUE:</h1>";
    echo "<div style=\"font-size:24px;\"><PRE>". var_export($_REQUEST, true) . "</PRE></div>";
    echo "<hr>";


    echo "<h1>GET VALUE:</h1>";
    echo "<div style=\"font-size:24px;\"><PRE>". var_export($_GET, true) . "</PRE></div>";


    // var_dump( $_POST );

    // echo "<hr>REQUEST:\n";
    // var_dump( $_REQUEST );

    // echo "<hr>GET:\n";
    // var_dump( $_GET );


    // }


?>
