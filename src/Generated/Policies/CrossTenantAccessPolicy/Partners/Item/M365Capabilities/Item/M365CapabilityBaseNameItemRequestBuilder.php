<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\M365Capabilities\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\M365CapabilityBase;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
*/
class M365CapabilityBaseNameItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new M365CapabilityBaseNameItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/partners/{crossTenantAccessPolicyConfigurationPartner%2DtenantId}/m365Capabilities/{m365CapabilityBase%2Dname}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property m365Capabilities for policies
     * @param M365CapabilityBaseNameItemRequestBuilderDeleteRequestCo_3f6e9747|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?M365CapabilityBaseNameItemRequestBuilderDeleteRequestCo_3f6e9747 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
    */
    public function get(?M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property m365Capabilities in policies
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilityBaseNameItemRequestBuilderPatchRequestCon_4d034236|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
    */
    public function patch(M365CapabilityBase $body, ?M365CapabilityBaseNameItemRequestBuilderPatchRequestCon_4d034236 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property m365Capabilities for policies
     * @param M365CapabilityBaseNameItemRequestBuilderDeleteRequestCo_3f6e9747|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?M365CapabilityBaseNameItemRequestBuilderDeleteRequestCo_3f6e9747 $requestConfiguration = null): RequestInformation {
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
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property m365Capabilities in policies
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilityBaseNameItemRequestBuilderPatchRequestCon_4d034236|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(M365CapabilityBase $body, ?M365CapabilityBaseNameItemRequestBuilderPatchRequestCon_4d034236 $requestConfiguration = null): RequestInformation {
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
     * @return M365CapabilityBaseNameItemRequestBuilder
    */
    public function withUrl(string $rawUrl): M365CapabilityBaseNameItemRequestBuilder {
        return new M365CapabilityBaseNameItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
