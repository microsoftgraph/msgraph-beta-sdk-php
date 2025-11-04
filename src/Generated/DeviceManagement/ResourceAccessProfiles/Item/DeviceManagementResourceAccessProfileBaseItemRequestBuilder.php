<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ResourceAccessProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ResourceAccessProfiles\Item\Assign\AssignRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ResourceAccessProfiles\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementResourceAccessProfileBase;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resourceAccessProfiles property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementResourceAccessProfileBaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceManagementResourceAccessProfileBase entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementResourceAccessProfileBaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/resourceAccessProfiles/{deviceManagementResourceAccessProfileBase%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property resourceAccessProfiles for deviceManagement
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementResourceAccessProfileBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of resource access settings associated with account.
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileBase|null>
     * @throws Exception
    */
    public function get(?DeviceManagementResourceAccessProfileBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property resourceAccessProfiles in deviceManagement
     * @param DeviceManagementResourceAccessProfileBase $body The request body
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileBase|null>
     * @throws Exception
    */
    public function patch(DeviceManagementResourceAccessProfileBase $body, ?DeviceManagementResourceAccessProfileBaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property resourceAccessProfiles for deviceManagement
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementResourceAccessProfileBaseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Collection of resource access settings associated with account.
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementResourceAccessProfileBaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property resourceAccessProfiles in deviceManagement
     * @param DeviceManagementResourceAccessProfileBase $body The request body
     * @param DeviceManagementResourceAccessProfileBaseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementResourceAccessProfileBase $body, ?DeviceManagementResourceAccessProfileBaseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementResourceAccessProfileBaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementResourceAccessProfileBaseItemRequestBuilder {
        return new DeviceManagementResourceAccessProfileBaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
