<?php

function blockreplace($replacementsfile, $inputfile, $source, $target)
{    

    $value_old = array();
    $value_new = array();

    $dataA  = file_get_contents("library-replacements.json");
    $a1     = json_decode($dataA, true);

    $dataB  = file_get_contents($replacementsfile);
    $a2     = json_decode($dataB, true);

    $a = array_merge($a1, $a2);

    foreach ($a['replacements'] as $b) {
        $value_old[] = $b[$source];
        $value_new[] = $b[$target];
    }
    $data  = file_get_contents($inputfile);
    $data1 = str_replace( $value_old, $value_new, $data);
    return $data1; 
}

function blockreplace_v2($filename, $replacementsfile, $source, $target, $vars )
{    
    $value_old = array();
    $value_new = array();


    $dataA  = file_get_contents("includes/library-replacements.json");
    $a1     = json_decode($dataA, true);
    if (!$a1) abort("ERROR: library-replacements.json no entrega datos. Revisar sintaxis.");
    // echo var_export($a1,true); die;

    $dataB  = file_get_contents($replacementsfile);
    $a2     = json_decode($dataB, true);
    if (!$a2) abort("ERROR: $replacementsfile no entrega datos. Revisar sintaxis.");
    // echo var_export($a2,true); die;

    $a = array_merge($a2['replacements'], $a1['replacements']);
    // echo var_export($a2,true); die;

    foreach ($a as $b) {
        $value_old[] = $b[$source];
        $value_new[] = $b[$target];
    }
    // echo var_export($value_new,true); die;
    // echo var_export($value_old,true); die;

    $inputfile = getInputFileName($filename , $source);
    $f         = './../json-data/' . $vars['mes']. '/' .$vars['folder']. '/' . $inputfile . '.json';

    if ( $source == "DCE" || $source == "FSH")
    {
        $rawdata  = file_get_contents($f);
        $rawdata1 = str_replace( $value_old, $value_new, $rawdata);    
        $a0       = json_decode($rawdata1, true);
        // echo var_export($a0 ,true); die;
        $b0       = json_encode($a0['blocks'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $data1    = "
    \"blocks\" : \n    ".str_replace("\n" , "\n    ", $b0) . ",\n";
    }
    else{
        $data      = getOriginalBlocks($f);
        $data1     = str_replace( $value_old, $value_new, $data);    
    }
    // echo var_export($data1,true); die;
    return $data1; 
}

/** 
 * Given a 'filename' (with no extension) like :
 *      "pmi-200525-20.94-Lending-AB-test-try-benefits-2-DCE"
 * and a 'source' like
 *      "HTML"
 * returns this replacement:
 *      pmi-200525-20.94-Lending-AB-test-try-benefits-2-HTML
 *
 */
function getInputFileName($filename, $source)
{
    $a1 = explode('-', $filename);
    $i  = sizeof($a1) - 1;
    $a2 = array( $i => $source );
    $a3 = array_replace($a1, $a2);
    $s4= ""; 
    foreach ($a3 as $aa)
        $s4 .= $aa . "-";
    return  substr($s4, 0, -1);
}

function getOriginalBlocks($f)
{
    $data1  = file_get_contents($f);
    $a      = json_decode($data1, true);
    // echo var_export($a ,true); die;
    $b      = json_encode($a['blocks'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
    $c      = "  \"blocks\" : \n    ".str_replace("\n" , "\n    ", $b) . ",\n";
    //echo $c.PHP_EOL;
    return $c;
}

function create_environment($mes, $folder, $filename, $target, $footergrey, $bgColor, $TwigTemplate, $TwigFooterBlock, $subject, $preheader, $path, $nameincrm, $customerkey)
{
    include_once("footer_vars.php"); 

    $a = array();

    $a['mes']             = $mes;
    $a['folder']          = $folder;
    $a['filename']        = $filename;
    $a['target']          = $target;
    $a['footergrey']      = $footergrey;
    $a['bgColor']         = $bgColor;
    $a['TwigTemplate']    = $TwigTemplate;    
    $a['TwigFooterBlock'] = $TwigFooterBlock;
    $a['subject']         = $subject;
    $a['preheader']       = $preheader;
    $a['path']            = $path;
    $a['nameincrm']       = $nameincrm;
    $a['customerkey']     = $customerkey;
    // NO SE PONEN DE ACUERDO CON ESTO EN EL HUB DE PMI...   
  //$a['DCEfootercolor']    = ( $footergrey == "1" )? "%%=ContentBlockbyKey(&quot;Commercial_MX_es_footer&quot;)=%%"  : "%%=ContentBlockbyKey(&quot;Commercial_MX_es_footer_white&quot;)=%%" ;
    $a['DCEfootercolor']    = ( $footergrey == "1" )? 
                '%%=ContentBlockbyKey(\"Commercial_MX_es_footer\")=%%'  : 
                '%%=ContentBlockbyKey(\"Commercial_MX_es_footer_white\")=%%' ;
    $a['trackmailopen']     = ( $target == "HTML")? "0" : "1";    
    $a['trackmailaudience'] = ( $target == "DCE")? "1" : "0";
    $a['footer_template']   = ( $target == "DCE")? "footer_template" : "footer_template__";
    $a['DCEfooter']         = ( $target == "DCE")? $a['DCEfootercolor'] : "";
   

    /*  trackmailopen:
        Elimina el warning en local/DCE:   
        This email does not include the code to track opens. 
        To include it from Code View, click Insert Code Snippet and then click 
        Track Email Opens to insert the tracking code.
        
        trackmailaudience
        elimina el warning en DCE:
        This message does not include the code to track Saleforce Audience Studio. 
        To include it from Code View, click Insert Code Snippet and then click 
        Saleforce Audience Studio Pixel to insert the tracking code.
    */


    // echo PHP_EOL.$a['DCEfootercolor'].PHP_EOL; die;

    if ($footer_blocks == NULL)
        $footer = "";
    else
    {
        if ( $footergrey == "1")
        $footer = $footer_blocks[$target];
        else
        {
            switch ($target)
            {
                case "DCE":
                    $footer= $footer_blocks['HTMLWHITE'];
                break;
                case "FSH":
                    $footer= $footer_blocks['FSHWHITE'];
                break;
                case "HTML":
                    $footer= $footer_blocks['HTMLWHITE'];
                break;
            }
        }
    }
    $a['footer'] = $footer;
    return $a;
}

function fill_config( $a )
{
    $config_template='{
    "DESCRIPTION"      :   "########### PMI  ############",
   
    "config_template" :
    {
        "RUN-THIS-ON-MAC"  :   "http://mailtool.lan:8888/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'",
        "RUN-THIS-ON-PC"   :        "http://mailtool.lan/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'",
        "openHTML-MAC"     :   "file:///Users/armandoromero/Documents/devF1/mailtool.lan/html/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'.html",

        "Subject"          :   "'.$a['subject'].'",
        "Preheader"        :   "'.$a['preheader'].'",

        "PATH"             :   "'.$a['path'].'",
        "Name-CustomerKey" :   
        [
            { 
                "name"        : "'.$a['nameincrm'].'",
                "CustomerKey" : "'.$a['customerkey'].'"
            }
        ],
        "test-url"         :   
        [
            { "urlD" : "https://paginum.com/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'" } ,
            { "urlS" : "https://paginum.com/email/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'.html"  },
            { "urlS" : "http://mailtool.lan:8888/email/'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'.html"},
            { "THIS" :  "urlD: Dynamic content / urlS: Static content" }

        ]
    },

    "SECTION_1"        :   "########### CONFIGURACION DE PLANTILLA ####################", 
    "BaseURLassets"    :   "",
    "BaseURLimg"       :   "",
    
    "HTMLstaticfile"   :   "'.$a['mes'].'/'.$a['folder'].'/'.$a['filename'].'.html",

    "trackmailopen"            :   "'.$a['trackmailopen'].'",
    "trackmailaudience"        :   "'.$a['trackmailaudience'].'",    

    "target"                   :   "'.$a['target'].'",
    "'.$a['footer_template'].'"          :   "'.  $a['DCEfooter'] .  '",
    "footer_templateDCEGREY"   :   "%%=ContentBlockbyKey(\"Commercial_MX_es_footer\")=%%",
    "footer_templateDCEWHITE"  :   "%%=ContentBlockbyKey(\"Commercial_MX_es_footer_white\")=%%",

    "TwigTemplate"     :   "pmi/'.$a['TwigTemplate'].'",
    "TwigFooterBlock"  :   "' .$a['TwigFooterBlock'].  '",
    "Source"           :   "' .$a['filename'].  '",
    "isWebVer"         :   " ",
    
    "SECTION_2"        :   "############ CONTENIDOS #####################################",
    "PageTitle"        :   "",
    "PREHEADER"        :   "",
    "content_bgcolor"  :   "'. $a['bgColor'].'",
    '. $a['footer'] . '
    ';
    return $config_template;
}

function get_emptyblocks()
{
    $empty_blocks='
    "blocks" : 
    [
    ],
    ';
    return $empty_blocks;
}

function createBlocks($requiredBlocks, $libraryBlocks)
{

    if ($requiredBlocks == NULL)
        return get_emptyblocks();

    $res = "";

    foreach ($requiredBlocks as $req) {
        $res .= $libraryBlocks[$req];
    }

    $blocks='
    "blocks" : 
    [' .$res .'
    ],
    ';
    return $blocks;
}

function get_ending()
{
    $ending= '
    "END"            :   "#######################"

    }
    ';
    return $ending;
}

function abort( $e=NULL ){
    echo $e;
    echo PHP_EOL;
    die;
}

function msgDone($f)
{
    define("L1",     "┌─────────────────────");
    define("L2",     "│ El archivo:         ");
    define("L3L5",   "├─────────────────────");
    define("L6",     "│ ha sido creado.     "); 
    define("L7",     "└─────────────────────");
    define("BVR",    "│");
    define("BHZ",    "─");
    define("L1F",    "┐");
    define("L3L5F",  "┤");
    define("L7F",    "┘");


    $lenmax = 4 + strlen($f);
    $fillersize= ( $lenmax >= strlen(L1)/3 )? $lenmax - strlen(L1)/3 -1 : 0;

    $str= $str2= "";
    for($i=0; $i<$fillersize ; $i++)
    {
        $str .= BHZ;
        $str2 .= " ";
    }
    
    echo L1   .  $str . L1F   .PHP_EOL;
    echo L2   .  $str2 . BVR    .PHP_EOL ;
    echo L3L5 .  $str . L3L5F .PHP_EOL ;
    echo BVR  . " " . $f . " " . BVR    .PHP_EOL ;
    echo L3L5 .  $str . L3L5F .PHP_EOL ;
    echo L6   . $str2 . BVR    .PHP_EOL ;
    echo L7   . $str . L7F   .PHP_EOL.PHP_EOL ;
    // echo "fillersize: " . $fillersize .PHP_EOL;
    // echo "lenmax"      . $lenmax    .PHP_EOL;
    // echo "strlen $f: " . strlen($f) .PHP_EOL;
    // echo "strlen L1: " . strlen(L1) .PHP_EOL;


}

function mk_path( $base, $mes , $folder)
{    
    $currentpath = getcwd();    
    $newdir = chdir($base);
    if ( !mk_dir( $mes ) )
        $ret= false;
    else
    {
        $newdir = chdir( getcwd()  . "/". $mes);
        $ret= (mk_dir($folder)) ? 1 : 0;
    }
    chdir($currentpath);
    return $ret;
}

function mk_dir( $dirname )
{
    if (!is_dir( $dirname  )) {
        if (mkdir( $dirname, 0777, true))
            $ret = 1; // OK, directory created
        else
            $ret= 0;  // NOK: directory couldn't be created
    } else {
        $ret = 2;     // OK, directory already exists
    }
    return $ret;
}