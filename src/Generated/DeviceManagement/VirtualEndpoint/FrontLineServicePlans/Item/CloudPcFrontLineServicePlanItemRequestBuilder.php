<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\FrontLineServicePlans\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcFrontLineServicePlan;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the frontLineServicePlans property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudPcFrontLineServicePlanItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CloudPcFrontLineServicePlanItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/frontLineServicePlans/{cloudPcFrontLineServicePlan%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property frontLineServicePlans for deviceManagement
     * @param CloudPcFrontLineServicePlanItemRequestBuilderDeleteRequ_cd6578c0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CloudPcFrontLineServicePlanItemRequestBuilderDeleteRequ_cd6578c0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of a cloudPcFrontLineServicePlan object.
     * @param CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcFrontLineServicePlan|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcfrontlineserviceplan-get?view=graph-rest-beta Find more info here
    */
    public function get(?CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcFrontLineServicePlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property frontLineServicePlans in deviceManagement
     * @param CloudPcFrontLineServicePlan $body The request body
     * @param CloudPcFrontLineServicePlanItemRequestBuilderPatchReque_4c2748e1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcFrontLineServicePlan|null>
     * @throws Exception
    */
    public function patch(CloudPcFrontLineServicePlan $body, ?CloudPcFrontLineServicePlanItemRequestBuilderPatchReque_4c2748e1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcFrontLineServicePlan::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property frontLineServicePlans for deviceManagement
     * @param CloudPcFrontLineServicePlanItemRequestBuilderDeleteRequ_cd6578c0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CloudPcFrontLineServicePlanItemRequestBuilderDeleteRequ_cd6578c0 $requestConfiguration = null): RequestInformation {
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
     * Get the properties and relationships of a cloudPcFrontLineServicePlan object.
     * @param CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPcFrontLineServicePlanItemRequestBuilderGetRequest_4ca9bb24 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/frontLineServicePlans/{cloudPcFrontLineServicePlan%2Did}{?%24expand,%24select}';
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
     * Update the navigation property frontLineServicePlans in deviceManagement
     * @param CloudPcFrontLineServicePlan $body The request body
     * @param CloudPcFrontLineServicePlanItemRequestBuilderPatchReque_4c2748e1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPcFrontLineServicePlan $body, ?CloudPcFrontLineServicePlanItemRequestBuilderPatchReque_4c2748e1 $requestConfiguration = null): RequestInformation {
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
     * @return CloudPcFrontLineServicePlanItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPcFrontLineServicePlanItemRequestBuilder {
        return new CloudPcFrontLineServicePlanItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
