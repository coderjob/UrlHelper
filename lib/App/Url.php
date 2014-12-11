<?php

namespace App;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class Url
{

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $uri;


    /**
     *
     */
    public function __construct($baseUrl)
    {
        $this->setBaseUrl($baseUrl);
    }

    /**
     *
     */
    public function __toString()
    {
        $string = $this->baseUrl;

        if ($this->getUri()) {
            
            $string .= '/' . $this->getUri();
        }

        return $string;
    }

    /**
     *
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     *
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     *
     */
    public function getUri()
    {
        return $this->uri;
    }
}
