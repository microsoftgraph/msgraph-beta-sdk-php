<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantAccessPolicyConfigurationPartner;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\IdentitySynchronization\IdentitySynchronizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\Restore\RestoreRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossTenantPartners property of the microsoft.graph.policyDeletableRoot entity.
*/
class CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the identitySynchronization property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
    */
    public function identitySynchronization(): IdentitySynchronizationRequestBuilder {
        return new IdentitySynchronizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/deletedItems/crossTenantPartners/{crossTenantAccessPolicyConfigurationPartner%2DtenantId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Permanently delete a policyDeletableItem object, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policydeletableitem-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a policyDeletableItem object, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartner|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policydeletableitem-get?view=graph-rest-beta Find more info here
    */
    public function get(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property crossTenantPartners in policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartner|null>
     * @throws Exception
    */
    public function patch(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Permanently delete a policyDeletableItem object, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a policyDeletableItem object, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property crossTenantPartners in policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder {
        return new CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
