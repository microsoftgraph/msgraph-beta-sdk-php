<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantAccessPolicyConfigurationPartner;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantAccessPolicyConfigurationPartnerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the partners property of the microsoft.graph.crossTenantAccessPolicy entity.
*/
class PartnersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the partners property of the microsoft.graph.crossTenantAccessPolicy entity.
     * @param string $crossTenantAccessPolicyConfigurationPartnerTenantId Unique identifier of the item
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder
    */
    public function byCrossTenantAccessPolicyConfigurationPartnerTenantId(string $crossTenantAccessPolicyConfigurationPartnerTenantId): CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['crossTenantAccessPolicyConfigurationPartner%2DtenantId'] = $crossTenantAccessPolicyConfigurationPartnerTenantId;
        return new CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PartnersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/partners{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Defines partner-specific configurations for external Azure Active Directory organizations.
     * @param PartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartnerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to partners for policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param PartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(CrossTenantAccessPolicyConfigurationPartner $body, ?PartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Defines partner-specific configurations for external Azure Active Directory organizations.
     * @param PartnersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PartnersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to partners for policies
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param PartnersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CrossTenantAccessPolicyConfigurationPartner $body, ?PartnersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
