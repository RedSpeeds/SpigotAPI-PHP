<?php
/**
 * Created by PhpStorm.
 * User: Server
 * Date: 14-3-2018
 * Time: 22:16
 */

namespace http;


class HTTPRequest
{
    //Curl is GET by default
    private $url =null;
    private $cookies = array();
    private $params = array();
    private $post = false;

    /**
     * HTTPRequest constructor.
     * @param null $url
     * @param array $cookies
     * @param array $params
     */
    public function __construct($url, array $cookies, array $params,$post)
    {
        $this->url = $url;
        $this->cookies = $cookies;
        $this->params = $params;
        $this->post = $post;
    }


    /**
     * @return null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function isPost()
    {
        return $this->post;
    }

    /**
     * @param bool $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    public function execute(){
        if($this->post==true){
            //TODO unit
        }
    }
}