<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\Item\AllotmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\Allotment;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\AllotmentCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the allotments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
*/
class AllotmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the allotments property of the microsoft.graph.cloudLicensing.adminCloudLicensing entity.
     * @param string $allotmentId The unique identifier of allotment
     * @return AllotmentItemRequestBuilder
    */
    public function byAllotmentId(string $allotmentId): AllotmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['allotment%2Did'] = $allotmentId;
        return new AllotmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AllotmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing/allotments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the allotment objects and their properties.
     * @param AllotmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AllotmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-admincloudlicensing-list-allotments?view=graph-rest-beta Find more info here
    */
    public function get(?AllotmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AllotmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to allotments for admin
     * @param Allotment $body The request body
     * @param AllotmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Allotment|null>
     * @throws Exception
    */
    public function post(Allotment $body, ?AllotmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Allotment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the allotment objects and their properties.
     * @param AllotmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AllotmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to allotments for admin
     * @param Allotment $body The request body
     * @param AllotmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Allotment $body, ?AllotmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AllotmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AllotmentsRequestBuilder {
        return new AllotmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
