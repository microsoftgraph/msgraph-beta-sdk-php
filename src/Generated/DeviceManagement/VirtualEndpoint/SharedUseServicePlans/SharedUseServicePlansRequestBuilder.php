<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SharedUseServicePlans;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SharedUseServicePlans\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SharedUseServicePlans\Item\CloudPcSharedUseServicePlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcSharedUseServicePlan;
use Microsoft\Graph\Beta\Generated\Models\CloudPcSharedUseServicePlanCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedUseServicePlans property of the microsoft.graph.virtualEndpoint entity.
*/
class SharedUseServicePlansRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedUseServicePlans property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcSharedUseServicePlanId The unique identifier of cloudPcSharedUseServicePlan
     * @return CloudPcSharedUseServicePlanItemRequestBuilder
    */
    public function byCloudPcSharedUseServicePlanId(string $cloudPcSharedUseServicePlanId): CloudPcSharedUseServicePlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcSharedUseServicePlan%2Did'] = $cloudPcSharedUseServicePlanId;
        return new CloudPcSharedUseServicePlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharedUseServicePlansRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/sharedUseServicePlans{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the cloudPcSharedUseServicePlan objects and their properties.
     * @param SharedUseServicePlansRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcSharedUseServicePlanCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-shareduseserviceplans?view=graph-rest-1.0 Find more info here
    */
    public function get(?SharedUseServicePlansRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcSharedUseServicePlanCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sharedUseServicePlans for deviceManagement
     * @param CloudPcSharedUseServicePlan $body The request body
     * @param SharedUseServicePlansRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcSharedUseServicePlan|null>
     * @throws Exception
    */
    public function post(CloudPcSharedUseServicePlan $body, ?SharedUseServicePlansRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcSharedUseServicePlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the cloudPcSharedUseServicePlan objects and their properties.
     * @param SharedUseServicePlansRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedUseServicePlansRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sharedUseServicePlans for deviceManagement
     * @param CloudPcSharedUseServicePlan $body The request body
     * @param SharedUseServicePlansRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPcSharedUseServicePlan $body, ?SharedUseServicePlansRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharedUseServicePlansRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedUseServicePlansRequestBuilder {
        return new SharedUseServicePlansRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
