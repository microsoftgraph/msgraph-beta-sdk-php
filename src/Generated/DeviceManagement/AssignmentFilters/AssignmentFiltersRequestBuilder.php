<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Enable\EnableRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\GetPlatformSupportedPropertiesWithPlatform\GetPlatformSupportedPropertiesWithPlatformRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\GetState\GetStateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Item\DeviceAndAppManagementAssignmentFilterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\ValidateFilter\ValidateFilterRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceAndAppManagementAssignmentFilter;
use Microsoft\Graph\Beta\Generated\Models\DeviceAndAppManagementAssignmentFilterCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentFilters property of the microsoft.graph.deviceManagement entity.
*/
class AssignmentFiltersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enable method.
    */
    public function enable(): EnableRequestBuilder {
        return new EnableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getState method.
    */
    public function getState(): GetStateRequestBuilder {
        return new GetStateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateFilter method.
    */
    public function validateFilter(): ValidateFilterRequestBuilder {
        return new ValidateFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentFilters property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceAndAppManagementAssignmentFilterId The unique identifier of deviceAndAppManagementAssignmentFilter
     * @return DeviceAndAppManagementAssignmentFilterItemRequestBuilder
    */
    public function byDeviceAndAppManagementAssignmentFilterId(string $deviceAndAppManagementAssignmentFilterId): DeviceAndAppManagementAssignmentFilterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceAndAppManagementAssignmentFilter%2Did'] = $deviceAndAppManagementAssignmentFilterId;
        return new DeviceAndAppManagementAssignmentFilterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignmentFiltersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/assignmentFilters{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of assignment filters
     * @param AssignmentFiltersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAndAppManagementAssignmentFilterCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AssignmentFiltersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAndAppManagementAssignmentFilterCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getPlatformSupportedProperties method.
     * @param string $platform Usage: platform='{platform}'
     * @return GetPlatformSupportedPropertiesWithPlatformRequestBuilder
    */
    public function getPlatformSupportedPropertiesWithPlatform(string $platform): GetPlatformSupportedPropertiesWithPlatformRequestBuilder {
        return new GetPlatformSupportedPropertiesWithPlatformRequestBuilder($this->pathParameters, $this->requestAdapter, $platform);
    }

    /**
     * Create new navigation property to assignmentFilters for deviceManagement
     * @param DeviceAndAppManagementAssignmentFilter $body The request body
     * @param AssignmentFiltersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAndAppManagementAssignmentFilter|null>
     * @throws Exception
    */
    public function post(DeviceAndAppManagementAssignmentFilter $body, ?AssignmentFiltersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAndAppManagementAssignmentFilter::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of assignment filters
     * @param AssignmentFiltersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentFiltersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to assignmentFilters for deviceManagement
     * @param DeviceAndAppManagementAssignmentFilter $body The request body
     * @param AssignmentFiltersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceAndAppManagementAssignmentFilter $body, ?AssignmentFiltersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssignmentFiltersRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentFiltersRequestBuilder {
        return new AssignmentFiltersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
