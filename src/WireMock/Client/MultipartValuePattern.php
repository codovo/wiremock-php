<?php

namespace WireMock\Client;

class MultipartValuePattern
{
    const ALL = 'ALL';
    const ANY = 'ANY';

    /** @var ValueMatchingStrategy[] */
    private $bodyPatterns;
    /** @var array<string, ValueMatchingStrategy> */
    private $headers;
    /** @var string */
    private $name;
    /** @var string */
    private $matchingType;

    /**
     * @param ValueMatchingStrategy[] $bodyPatterns
     * @param array<string, ValueMatchingStrategy> $headers
     * @param string $name
     * @param string $matchingType
     */
    public function __construct($bodyPatterns = [], $headers = [], $name = null, $matchingType = null)
    {
        $this->bodyPatterns = $bodyPatterns;
        $this->headers = $headers;
        $this->name = $name;
        $this->matchingType = $matchingType;
    }

    /**
     * @return array
     */
    public function getBodyPatterns()
    {
        return $this->bodyPatterns;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMatchingType()
    {
        return $this->matchingType;
    }
}