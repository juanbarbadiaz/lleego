<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Request;

class ApiService
{
    public function __construct()
    {

    }

    public function callApi($url){

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        $xml = curl_exec($ch);
        curl_close($ch);
        $respuesta = new \SimpleXMLElement($xml);
        $cuerpo = $respuesta->children('soap', true)->Body->children('', true);
        return $cuerpo;

    }
}