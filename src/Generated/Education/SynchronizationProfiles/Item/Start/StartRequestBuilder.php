<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Start;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the start method.
*/
class StartRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new StartRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/synchronizationProfiles/{educationSynchronizationProfile%2Did}/start');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Verify the files uploaded to a specific school data synchronization profile in the tenant. If the verification is successful, synchronization starts on the profile. Otherwise, the response contains errors and warnings. If the response contains errors, the synchronization won't start. If the response contains only warnings, synchronization starts.
     * @param StartRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StartPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationsynchronizationprofile-start?view=graph-rest-1.0 Find more info here
    */
    public function post(?StartRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StartPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Verify the files uploaded to a specific school data synchronization profile in the tenant. If the verification is successful, synchronization starts on the profile. Otherwise, the response contains errors and warnings. If the response contains errors, the synchronization won't start. If the response contains only warnings, synchronization starts.
     * @param StartRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?StartRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StartRequestBuilder
    */
    public function withUrl(string $rawUrl): StartRequestBuilder {
        return new StartRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
