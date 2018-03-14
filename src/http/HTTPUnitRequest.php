<?php
/**
 * Created by PhpStorm.
 * User: Server
 * Date: 14-3-2018
 * Time: 22:26
 */

namespace http;
use Curl\Curl;

require __DIR__ . '/../../vendor/autoload.php';

class HTTPUnitRequest
{
    private static $webClient= null;
    const useragent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
    public static function init(){
        $webClient = new Curl();
        $webClient->setOpt("CURLOPT_CONNECTTIMEOUT_MS",15000);
        $webClient->setOpt("CURLOPT_FOLLOWLOCATION",true);
        $webClient->setUserAgent(self::useragent);
    }

}