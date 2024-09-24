#!/usr/bin/env php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add the shebang in the first line: #!/usr/bin/env php
 *      2.- set permissions: chmod +x mk_folders.php
 *      3.- run the script as: ./mk_folders.php
 * 
 */

include_once("includes_v2/functions_v2.php");


if ($argc == 2){
    if ($argv[1] == "-" or  $argv[1] == "PSD" or $argv[1] == "psd")
        $arg = "";
    else
        $arg = $argv[1];
}
else{
    $arg = "-assets";
}


//  echo "so far, so good..." . PHP_EOL; die;
$r= askUserRange();
for ($i= $r[0] ; $i<= $r[1]  ; $i++)
{
    $dirname = sprintf("24.%d%s" , $i, $arg);
    echo "Creando $dirname ".PHP_EOL;
    mk_dir( $dirname );
}
echo PHP_EOL; die;



function askUserRange()
{
    $userinput = readline("Rango (xx-yy)?  -> ");
    $a = explode("-" ,$userinput); // $a[0] siempre existirá.
    $a[1] ??= NULL;               // Si $a[1] no existe, asignarle NULL.  [Null Coalescing Assignment Operator]

    if ( $a[0] !== "" and $a[1] !== NULL ){
        list($a,$b) = $c = array_map('trim', $a);  // recorta espacios antes y despues de cada argumento
        if ( is_numeric($c[0]) and is_numeric($c[1])){
            if ($b - $a > 0)
                return $c;
            else{
                echo "ERROR DE RANGO: el primer valor del rango debe ser menor que el segundo" .PHP_EOL;
                die;        
            }
        }
        else{
            echo "ERROR DE ARGUMENTOS: el rango debe tener dos valores numéricos separados por un caracter '-'" .PHP_EOL;
            die;    
        }
    }
    else{
        echo "ERROR DE ARGUMENTOS: el rango debe tener dos valores numéricos separados por un caracter '-'" .PHP_EOL;
        die;
    }
}



