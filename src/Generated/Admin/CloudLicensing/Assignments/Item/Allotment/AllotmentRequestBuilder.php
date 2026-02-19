<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\Item\Allotment;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\Allotment;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the allotment property of the microsoft.graph.cloudLicensing.assignment entity.
*/
class AllotmentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AllotmentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing/assignments/{assignment%2Did}/allotment{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the allotment that is the source of the licenses used in the assignment.
     * @param AllotmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Allotment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-assignment-get-allotment?view=graph-rest-beta Find more info here
    */
    public function get(?AllotmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Allotment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the allotment that is the source of the licenses used in the assignment.
     * @param AllotmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AllotmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AllotmentRequestBuilder
    */
    public function withUrl(string $rawUrl): AllotmentRequestBuilder {
        return new AllotmentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
