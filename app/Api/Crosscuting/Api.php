<?php

namespace App\Api\Crosscuting;

class Api
{
    private   $public_Key = "dd09bae23c3d5bd34ea8c4d2d5db3fc1";
    private    $private_Key = "ff4ac87ca0b55d4d01e6ef2a87f8f81d82d0b0e3";
    private   $URL = "https://gateway.marvel.com:443";

    public function get($url)
    {
        $ch = curl_init();
        $timestamp = time();
        $credencials = "?ts=" . $timestamp . "&apikey=" . $this->public_Key . "&hash=" . $this->md5cifrar($timestamp);
        $fullUrl=$this->URL . "/" . $url.$credencials;
        //echo $fullUrl;
        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        /* $headers = array();
        $headers[] = 'ts: ' . $timestamp;
        $headers[] = 'apikey: ' . $this->public_Key;
        $headers[] = 'hash: ' . md5($timestamp);*/
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
       // echo    $result;
        return $result;
    }
    private function md5cifrar($ts)
    {
        return md5($ts . $this->private_Key . $this->public_Key);
    }
}
