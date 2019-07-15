<?php
namespace Safe2Pay\Api;
include_once(__DIR__.'/../Core/Client.php');



class Marketplace{


    public static function Add($object){

        $request = Client:: HttpClient('POST','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Update($object){

        $request = Client:: HttpClient('PUT','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Delete($object){

        $request = Client:: HttpClient('DELETE','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function Get($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }

    public static function List($object){

        $request = Client:: HttpClient('GET','', json_encode(null),false);
        $response = json_decode($request , true);
        return response;
    }
}

?>