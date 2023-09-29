<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace MyOwl\MyOwl;

/**
 * MyOwl - L5 OpenApi: L5 Swagger OpenApi description
 * 
 * @package MyOwl\MyOwl
 * @access public
 */
class MyOwl
{
	public const SERVERS = [
        /** L5 Swagger OpenApi dynamic host server */
		'https://myowl-client-api.dev1-ironistic.com/',
        /** L5 Swagger OpenApi Server */
		'https://myowl-client-api.dev1-ironistic.com/api/',
	];
  		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return MyOwlBuilder
	 */
	public static function builder(): MyOwlBuilder
	{
		return new MyOwlBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
	}
	
    /**
     * Adds a new user to the system
     * 
     * @param \MyOwl\MyOwl\Models\Operations\RegisterRequestBody $request
     * @return \MyOwl\MyOwl\Models\Operations\RegisterResponse
     */
	public function register(
        ?\MyOwl\MyOwl\Models\Operations\RegisterRequestBody $request,
    ): \MyOwl\MyOwl\Models\Operations\RegisterResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/v1/register');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \MyOwl\MyOwl\Models\Operations\RegisterResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
}