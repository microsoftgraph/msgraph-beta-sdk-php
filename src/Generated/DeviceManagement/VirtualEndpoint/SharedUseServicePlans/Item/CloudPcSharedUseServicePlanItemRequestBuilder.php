<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SharedUseServicePlans\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcSharedUseServicePlan;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedUseServicePlans property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudPcSharedUseServicePlanItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CloudPcSharedUseServicePlanItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/sharedUseServicePlans/{cloudPcSharedUseServicePlan%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property sharedUseServicePlans for deviceManagement
     * @param CloudPcSharedUseServicePlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudPcSharedUseServicePlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get sharedUseServicePlans from deviceManagement
     * @param CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcSharedUseServicePlan|null>
     * @throws Exception
    */
    public function get(?CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcSharedUseServicePlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property sharedUseServicePlans in deviceManagement
     * @param CloudPcSharedUseServicePlan $body The request body
     * @param CloudPcSharedUseServicePlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcSharedUseServicePlan|null>
     * @throws Exception
    */
    public function patch(CloudPcSharedUseServicePlan $body, ?CloudPcSharedUseServicePlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcSharedUseServicePlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property sharedUseServicePlans for deviceManagement
     * @param CloudPcSharedUseServicePlanItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPcSharedUseServicePlanItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get sharedUseServicePlans from deviceManagement
     * @param CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property sharedUseServicePlans in deviceManagement
     * @param CloudPcSharedUseServicePlan $body The request body
     * @param CloudPcSharedUseServicePlanItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPcSharedUseServicePlan $body, ?CloudPcSharedUseServicePlanItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return CloudPcSharedUseServicePlanItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPcSharedUseServicePlanItemRequestBuilder {
        return new CloudPcSharedUseServicePlanItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
