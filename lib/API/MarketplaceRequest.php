<?php


namespace Safe2Pay\API;

use Safe2Pay\Models\Core\Client;
use Safe2Pay\Models\Response\Response;


require_once __DIR__.'\../Models/Core/Client.php';
require_once __DIR__.'\../Models/Response/Response.php';

/**
 * Class MarketplaceRequest
 *
 * @package  Api
 */
class MarketplaceRequest{

     /**
     * Add Merchant
     *
     * @param [Merchant] $merchant
     * @return Response
     */
    public static function Add($merchant){

        $request = Client:: HttpClient('POST','v2/Marketplace/Add',$merchant ,false);
        $response = json_decode($request , true);
        return $response;
    }

    /**
     * Update Merchant
     *
     * @param [Merchant] $merchant
     * @param [int] $Id
     * @return Response
     */
    public static function Update($merchant, $Id){

        $request = Client:: HttpClient('PUT',"/v2/Marketplace/Update?id={$Id}", $merchant,false);
        $response = json_decode($request , true);
        return $response;
    }

    /**
     * Delete Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Delete($Id){

        $request = Client:: HttpClient("DELETE","v2/Marketplace/Delete?id={$Id}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Get Merchant
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Get($Id){

        $request = Client:: HttpClient('GET',"v2/Marketplace/Get?id={$Id}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Merchant List
     *
     * @param [PageNumber] $PageNumber
     * @param [RowsPage] $RowsPage
     * @return Response
     */
    public static function List($PageNumber,$RowsPage){

        $request = Client:: HttpClient('GET',"v2/Marketplace/List?PageNumber={$PageNumber}&RowsPerPage={$RowsPage}", null,false);
        $response = json_decode($request , true);
        return $response;
    }
}

?>