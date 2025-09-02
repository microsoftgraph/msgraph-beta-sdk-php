<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantSyncPolicyPartners;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantIdentitySyncPolicyPartner;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantIdentitySyncPolicyPartnerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantSyncPolicyPartners\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantSyncPolicyPartners\Item\CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossTenantSyncPolicyPartners property of the microsoft.graph.policyDeletableRoot entity.
*/
class CrossTenantSyncPolicyPartnersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossTenantSyncPolicyPartners property of the microsoft.graph.policyDeletableRoot entity.
     * @param string $crossTenantIdentitySyncPolicyPartnerTenantId The unique identifier of crossTenantIdentitySyncPolicyPartner
     * @return CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilder
    */
    public function byCrossTenantIdentitySyncPolicyPartnerTenantId(string $crossTenantIdentitySyncPolicyPartnerTenantId): CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['crossTenantIdentitySyncPolicyPartner%2DtenantId'] = $crossTenantIdentitySyncPolicyPartnerTenantId;
        return new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossTenantSyncPolicyPartnersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/deletedItems/crossTenantSyncPolicyPartners{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the policyDeletableItem objects and their properties, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner
     * @param CrossTenantSyncPolicyPartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantIdentitySyncPolicyPartnerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policydeletableitem-list?view=graph-rest-beta Find more info here
    */
    public function get(?CrossTenantSyncPolicyPartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantIdentitySyncPolicyPartnerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to crossTenantSyncPolicyPartners for policies
     * @param CrossTenantIdentitySyncPolicyPartner $body The request body
     * @param CrossTenantSyncPolicyPartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantIdentitySyncPolicyPartner|null>
     * @throws Exception
    */
    public function post(CrossTenantIdentitySyncPolicyPartner $body, ?CrossTenantSyncPolicyPartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantIdentitySyncPolicyPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the policyDeletableItem objects and their properties, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner
     * @param CrossTenantSyncPolicyPartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantSyncPolicyPartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to crossTenantSyncPolicyPartners for policies
     * @param CrossTenantIdentitySyncPolicyPartner $body The request body
     * @param CrossTenantSyncPolicyPartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CrossTenantIdentitySyncPolicyPartner $body, ?CrossTenantSyncPolicyPartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantSyncPolicyPartnersRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantSyncPolicyPartnersRequestBuilder {
        return new CrossTenantSyncPolicyPartnersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
