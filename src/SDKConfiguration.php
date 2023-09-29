<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MyOwl\MyOwl;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.0';
	public string $sdkVersion = '0.3.0';
	public string $genVersion = '2.139.1';
	public string $userAgent = 'speakeasy-sdk/php 0.3.0 2.139.1 1.0.0 myowl/myowl';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return MyOwl::SERVERS[$this->serverIndex];
	}
	
}