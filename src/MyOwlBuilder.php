<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace MyOwl\MyOwl;

/**
 * MyOwlBuilder is used to configure and build an instance of the SDK.
 * 
 * @package MyOwl\MyOwl
 */
class MyOwlBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {}

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return MyOwlBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): MyOwlBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return MyOwlBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): MyOwlBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return MyOwlBuilder
     */
    public function setServerIndex(int $serverIdx): MyOwlBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    
    
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return MyOwl
     */
    public function build(): MyOwl
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new MyOwl($this->sdkConfig);
    }
}