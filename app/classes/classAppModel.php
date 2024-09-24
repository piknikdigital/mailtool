<?php

class AppModel 
{
    /**
     * 
     */
    public $twigData;

    function __construct()
    {
	}

    /**
     * 
     */
    public function loadjson( $f )
    {
        $filename = $_SERVER['DOCUMENT_ROOT'] . "/app/json-data/". $f. ".json";
        if ( !file_exists ($filename) ){
            $this->twigData = null;
            // echo "NOPE";die;
        }else{
            $data = file_get_contents($filename);
            // echo var_export($filename, true); die;            
            // echo var_export($data, true); die;
            $this->twigData = json_decode($data, true);
            // echo var_export($this->twigData);die;
        }
    }

}
