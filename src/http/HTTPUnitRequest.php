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
    public $webClient= new Curl();
    public $baseurl = "https://spigotmc.org/";
    const useragent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
    public function init(){
        try {
            $this->webClient = new Curl();
        } catch (\ErrorException $e) {
        }
        $this->webClient->setOpt("CURLOPT_CONNECTTIMEOUT_MS",15000);
        $this->webClient->setOpt("CURLOPT_FOLLOWLOCATION",true);
        $this->webClient->setUserAgent(self::useragent);
    }
    public function get($url,array $cookies,array $params){
        foreach ($cookies as $key => $value){
            $this->webClient->setCookie($key, $value);
        }
        $parmsurl = "";
        foreach ($params as $key => $value){
            $parmsurl.="?".$key."=".$value."&";
        }
        $this->webClient->setUrl($this->baseurl.$url.$parmsurl);
        $result = $this->webClient->exec();
        $page = new \DOMDocument();
        $page->loadHTML($result);


    }

}