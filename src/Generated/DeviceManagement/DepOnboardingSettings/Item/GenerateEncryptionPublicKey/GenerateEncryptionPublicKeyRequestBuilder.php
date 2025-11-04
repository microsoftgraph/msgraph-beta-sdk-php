<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DepOnboardingSettings\Item\GenerateEncryptionPublicKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the generateEncryptionPublicKey method.
*/
class GenerateEncryptionPublicKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GenerateEncryptionPublicKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/depOnboardingSettings/{depOnboardingSetting%2Did}/generateEncryptionPublicKey');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Generate a public key to use to encrypt the Apple device enrollment program token
     * @param GenerateEncryptionPublicKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GenerateEncryptionPublicKeyPostResponse|null>
     * @throws Exception
    */
    public function post(?GenerateEncryptionPublicKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GenerateEncryptionPublicKeyPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Generate a public key to use to encrypt the Apple device enrollment program token
     * @param GenerateEncryptionPublicKeyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?GenerateEncryptionPublicKeyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GenerateEncryptionPublicKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): GenerateEncryptionPublicKeyRequestBuilder {
        return new GenerateEncryptionPublicKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
