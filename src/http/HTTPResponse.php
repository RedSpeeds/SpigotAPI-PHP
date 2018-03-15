<?php
/**
 * Created by PhpStorm.
 * User: Server
 * Date: 14-3-2018
 * Time: 22:54
 */

namespace http;


class HTTPResponse
{
    private $cookies = array();
    private $html = "";
    private $url = "";
    private $orignalRequest = null;

    /**
     * HTTPResponse constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return array
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * @param array $cookies
     */
    public function setCookies($cookies)
    {
        $this->cookies = $cookies;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return null
     */
    public function getOrignalRequest()
    {
        return $this->orignalRequest;
    }

    /**
     * @param null $orignalRequest
     */
    public function setOrignalRequest($orignalRequest)
    {
        $this->orignalRequest = $orignalRequest;
    }


}