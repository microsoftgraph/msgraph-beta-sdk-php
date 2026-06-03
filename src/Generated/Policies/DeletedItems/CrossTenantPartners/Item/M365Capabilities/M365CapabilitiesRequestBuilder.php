<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\M365Capabilities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\M365CapabilityBase;
use Microsoft\Graph\Beta\Generated\Models\M365CapabilityBaseCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\M365Capabilities\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\M365Capabilities\Item\M365CapabilityBaseNameItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
*/
class M365CapabilitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
     * @param string $m365CapabilityBaseName The unique identifier of m365CapabilityBase
     * @return M365CapabilityBaseNameItemRequestBuilder
    */
    public function byM365CapabilityBaseName(string $m365CapabilityBaseName): M365CapabilityBaseNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['m365CapabilityBase%2Dname'] = $m365CapabilityBaseName;
        return new M365CapabilityBaseNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new M365CapabilitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBaseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?M365CapabilitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to m365Capabilities for policies
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
    */
    public function post(M365CapabilityBase $body, ?M365CapabilitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?M365CapabilitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to m365Capabilities for policies
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(M365CapabilityBase $body, ?M365CapabilitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return M365CapabilitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): M365CapabilitiesRequestBuilder {
        return new M365CapabilitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
