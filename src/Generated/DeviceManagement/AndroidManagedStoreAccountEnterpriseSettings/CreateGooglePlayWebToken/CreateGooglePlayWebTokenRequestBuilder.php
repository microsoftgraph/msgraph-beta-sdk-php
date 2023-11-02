<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\CreateGooglePlayWebToken;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createGooglePlayWebToken method.
*/
class CreateGooglePlayWebTokenRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreateGooglePlayWebTokenRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/androidManagedStoreAccountEnterpriseSettings/createGooglePlayWebToken');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Generates a web token that is used in an embeddable component.
     * @param CreateGooglePlayWebTokenPostRequestBody $body The request body
     * @param CreateGooglePlayWebTokenRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateGooglePlayWebTokenPostResponse|null>
     * @throws Exception
    */
    public function post(CreateGooglePlayWebTokenPostRequestBody $body, ?CreateGooglePlayWebTokenRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateGooglePlayWebTokenPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Generates a web token that is used in an embeddable component.
     * @param CreateGooglePlayWebTokenPostRequestBody $body The request body
     * @param CreateGooglePlayWebTokenRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateGooglePlayWebTokenPostRequestBody $body, ?CreateGooglePlayWebTokenRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CreateGooglePlayWebTokenRequestBuilder
    */
    public function withUrl(string $rawUrl): CreateGooglePlayWebTokenRequestBuilder {
        return new CreateGooglePlayWebTokenRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
