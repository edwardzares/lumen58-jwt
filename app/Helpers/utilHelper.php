<?php
/**
 * User: EDWARD OSORIO
 * Date: 31/03/2018
 * Time: 10:39 AM
 */

if (! function_exists('writeFile')) {
    /**
     * Método que permite escribir en un archivo
     * @param $file
     * @param $message
     * @param string $mode
     */
    function writeFile($file, $message, $mode = 'a'){
        $file = fopen($file, $mode);
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}

if (! function_exists('writeLog')) {
    /**
     * Método que permite escribir en un archivo para logs
     * @param $file
     * @param $message
     * @param string $mode
     */
    function writeLog($message, $file = 'archivo.txt'){
        $file = fopen(storage_path()."/".$file, 'a');
        $data = "### Date: ".date('d-M-Y H:i:s')."\n".$message;
        fwrite($file, $data . PHP_EOL);
        fclose($file);
    }
}

if (! function_exists('str_file')) {
    /**
     * Método que convierte un archivo en cadena de texto
     * @param $filePath
     * @return null|string
     */
    function str_file($filePath){
        $file = fopen($filePath, "a+");
        $linea = null;
        while(!feof($file)) {
            $linea .= fgets($file);
        }
        fclose($file);
        return $linea;
    }
}

if (! function_exists('lang')) {
    /**
     * Método de traduccion simultanea
     * @param $key
     * @param array $attributes
     * @return mixed
     */
    function lang($key, $attributes = [])
    {
        if (!empty($attributes)) {
            return \Illuminate\Support\Facades\Lang::get($key, $attributes);
        }
        return \Illuminate\Support\Facades\Lang::get($key);
    }
}

if (! function_exists('is_base64')) {
    /**
     * @param $data
     * @return bool
     */
    function is_base64($data)
    {
        //return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $data);
        return ( base64_encode(base64_decode($data, true)) === $data );
    }
}

if (! function_exists('getView')) {
    /**
     * @param $name
     * @return null|string
     */
    function getView($name){
        return str_file(base_path()."/resources/views/".$name.".php");
    }
}

if (! function_exists('is_multiArray')) {
    /**
     * @param $array
     * @return bool
     */
    function is_multiArray($array){
        foreach ($array as $item) {
            if (is_array($item)) return true;
        }
        return false;
    }
}

/*
if (! function_exists('upload_file')) {
    function upload_file($name, $data, $path){
//configurar el archivo filesystem
        \Illuminate\Support\Facades\Storage::
    }

}
*/