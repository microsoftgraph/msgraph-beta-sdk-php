<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\GetProvisionedCloudPCsWithGroupIdWithServicePlanId\GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\CloudPCItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\RetrieveCloudPcCountByStatus\RetrieveCloudPcCountByStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\ValidateBulkResize\ValidateBulkResizeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPC;
use Microsoft\Graph\Beta\Generated\Models\CloudPCCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudPCs property of the microsoft.graph.virtualEndpoint entity.
*/
class CloudPCsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveCloudPcCountByStatus method.
    */
    public function retrieveCloudPcCountByStatus(): RetrieveCloudPcCountByStatusRequestBuilder {
        return new RetrieveCloudPcCountByStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateBulkResize method.
    */
    public function validateBulkResize(): ValidateBulkResizeRequestBuilder {
        return new ValidateBulkResizeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPCs property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPCId The unique identifier of cloudPC
     * @return CloudPCItemRequestBuilder
    */
    public function byCloudPCId(string $cloudPCId): CloudPCItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPC%2Did'] = $cloudPCId;
        return new CloudPCItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudPCsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the cloudPC devices in a tenant.
     * @param CloudPCsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPCCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-cloudpcs?view=graph-rest-beta Find more info here
    */
    public function get(?CloudPCsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPCCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getProvisionedCloudPCs method.
     * @param string $groupId Usage: groupId='{groupId}'
     * @param string $servicePlanId Usage: servicePlanId='{servicePlanId}'
     * @return GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder
    */
    public function getProvisionedCloudPCsWithGroupIdWithServicePlanId(string $groupId, string $servicePlanId): GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder {
        return new GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder($this->pathParameters, $this->requestAdapter, $groupId, $servicePlanId);
    }

    /**
     * Create new navigation property to cloudPCs for deviceManagement
     * @param CloudPC $body The request body
     * @param CloudPCsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPC|null>
     * @throws Exception
    */
    public function post(CloudPC $body, ?CloudPCsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPC::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the cloudPC devices in a tenant.
     * @param CloudPCsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudPCsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to cloudPCs for deviceManagement
     * @param CloudPC $body The request body
     * @param CloudPCsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPC $body, ?CloudPCsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudPCsRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
