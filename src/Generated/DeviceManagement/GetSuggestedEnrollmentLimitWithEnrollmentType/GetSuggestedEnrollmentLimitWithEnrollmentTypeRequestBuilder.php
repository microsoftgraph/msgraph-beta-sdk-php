<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GetSuggestedEnrollmentLimitWithEnrollmentType;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SuggestedEnrollmentLimit;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getSuggestedEnrollmentLimit method.
*/
class GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $enrollmentType Usage: enrollmentType='{enrollmentType}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $enrollmentType = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/getSuggestedEnrollmentLimit(enrollmentType=\'{enrollmentType}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['enrollmentType'] = $enrollmentType;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getSuggestedEnrollmentLimit
     * @param GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SuggestedEnrollmentLimit::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function getSuggestedEnrollmentLimit
     * @param GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder
    */
    public function withUrl(string $rawUrl): GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder {
        return new GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
