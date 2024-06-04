<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\WindowsQualityUpdatePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdatePolicy;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdatePolicyCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsQualityUpdatePolicies property of the microsoft.graph.deviceManagement entity.
*/
class WindowsQualityUpdatePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsQualityUpdatePolicies property of the microsoft.graph.deviceManagement entity.
     * @param string $windowsQualityUpdatePolicyId The unique identifier of windowsQualityUpdatePolicy
     * @return WindowsQualityUpdatePolicyItemRequestBuilder
    */
    public function byWindowsQualityUpdatePolicyId(string $windowsQualityUpdatePolicyId): WindowsQualityUpdatePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsQualityUpdatePolicy%2Did'] = $windowsQualityUpdatePolicyId;
        return new WindowsQualityUpdatePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsQualityUpdatePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsQualityUpdatePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of Windows quality update policies
     * @param WindowsQualityUpdatePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdatePolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WindowsQualityUpdatePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdatePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to windowsQualityUpdatePolicies for deviceManagement
     * @param WindowsQualityUpdatePolicy $body The request body
     * @param WindowsQualityUpdatePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsQualityUpdatePolicy|null>
     * @throws Exception
    */
    public function post(WindowsQualityUpdatePolicy $body, ?WindowsQualityUpdatePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsQualityUpdatePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of Windows quality update policies
     * @param WindowsQualityUpdatePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsQualityUpdatePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to windowsQualityUpdatePolicies for deviceManagement
     * @param WindowsQualityUpdatePolicy $body The request body
     * @param WindowsQualityUpdatePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WindowsQualityUpdatePolicy $body, ?WindowsQualityUpdatePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsQualityUpdatePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsQualityUpdatePoliciesRequestBuilder {
        return new WindowsQualityUpdatePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
