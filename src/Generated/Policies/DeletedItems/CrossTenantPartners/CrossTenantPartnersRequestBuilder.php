<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantAccessPolicyConfigurationPartner;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantAccessPolicyConfigurationPartnerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item\CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossTenantPartners property of the microsoft.graph.policyDeletableRoot entity.
*/
class CrossTenantPartnersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossTenantPartners property of the microsoft.graph.policyDeletableRoot entity.
     * @param string $crossTenantAccessPolicyConfigurationPartnerTenantId The unique identifier of crossTenantAccessPolicyConfigurationPartner
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder
    */
    public function byCrossTenantAccessPolicyConfigurationPartnerTenantId(string $crossTenantAccessPolicyConfigurationPartnerTenantId): CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['crossTenantAccessPolicyConfigurationPartner%2DtenantId'] = $crossTenantAccessPolicyConfigurationPartnerTenantId;
        return new CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossTenantPartnersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/deletedItems/crossTenantPartners{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the policyDeletableItem objects and their properties, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantPartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartnerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policydeletableitem-list?view=graph-rest-beta Find more info here
    */
    public function get(?CrossTenantPartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartnerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to crossTenantPartners for policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantPartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartner|null>
     * @throws Exception
    */
    public function post(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantPartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the policyDeletableItem objects and their properties, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner- conditionalAccessPolicy- namedLocation
     * @param CrossTenantPartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantPartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to crossTenantPartners for policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantPartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantPartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantPartnersRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantPartnersRequestBuilder {
        return new CrossTenantPartnersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
