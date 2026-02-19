<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\AssignmentErrors\Item\UsageRight;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\UsageRight;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the usageRight property of the microsoft.graph.cloudLicensing.assignmentError entity.
*/
class UsageRightRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UsageRightRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing/assignmentErrors/{assignmentError%2Did}/usageRight{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a usageRight object affected by an assignmentError. A usageRight object is returned only if a preexisting one is in effect and can't be updated due to this assignmentError.
     * @param UsageRightRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UsageRight|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-assignmenterror-get-usageright?view=graph-rest-beta Find more info here
    */
    public function get(?UsageRightRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UsageRight::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a usageRight object affected by an assignmentError. A usageRight object is returned only if a preexisting one is in effect and can't be updated due to this assignmentError.
     * @param UsageRightRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UsageRightRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UsageRightRequestBuilder
    */
    public function withUrl(string $rawUrl): UsageRightRequestBuilder {
        return new UsageRightRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
