<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\BulkAction\BulkActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\RetrieveWindowsQualityUpdateCatalogItemDetailsWithIds\RetrieveWindowsQualityUpdateCatalogItemDetailsWithIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdatePolicy;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsQualityUpdatePolicies property of the microsoft.graph.deviceManagement entity.
*/
class WindowsQualityUpdatePolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.windowsQualityUpdatePolicy entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the bulkAction method.
    */
    public function bulkAction(): BulkActionRequestBuilder {
        return new BulkActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsQualityUpdatePolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsQualityUpdatePolicies/{windowsQualityUpdatePolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property windowsQualityUpdatePolicies for deviceManagement
     * @param WindowsQualityUpdatePolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WindowsQualityUpdatePolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of Windows quality update policies
     * @param WindowsQualityUpdatePolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdatePolicy|null>
     * @throws Exception
    */
    public function get(?WindowsQualityUpdatePolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdatePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property windowsQualityUpdatePolicies in deviceManagement
     * @param WindowsQualityUpdatePolicy $body The request body
     * @param WindowsQualityUpdatePolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdatePolicy|null>
     * @throws Exception
    */
    public function patch(WindowsQualityUpdatePolicy $body, ?WindowsQualityUpdatePolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdatePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the retrieveWindowsQualityUpdateCatalogItemDetails method.
     * @param string $ids Usage: ids={ids}
     * @return RetrieveWindowsQualityUpdateCatalogItemDetailsWithIdsRequestBuilder
    */
    public function retrieveWindowsQualityUpdateCatalogItemDetailsWithIds(string $ids): RetrieveWindowsQualityUpdateCatalogItemDetailsWithIdsRequestBuilder {
        return new RetrieveWindowsQualityUpdateCatalogItemDetailsWithIdsRequestBuilder($this->pathParameters, $this->requestAdapter, $ids);
    }

    /**
     * Delete navigation property windowsQualityUpdatePolicies for deviceManagement
     * @param WindowsQualityUpdatePolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsQualityUpdatePolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * A collection of Windows quality update policies
     * @param WindowsQualityUpdatePolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsQualityUpdatePolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property windowsQualityUpdatePolicies in deviceManagement
     * @param WindowsQualityUpdatePolicy $body The request body
     * @param WindowsQualityUpdatePolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsQualityUpdatePolicy $body, ?WindowsQualityUpdatePolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsQualityUpdatePolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsQualityUpdatePolicyItemRequestBuilder {
        return new WindowsQualityUpdatePolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
