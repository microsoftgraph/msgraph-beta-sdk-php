<?php

namespace Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MobilityManagementPolicy;
use Microsoft\Graph\Beta\Generated\Models\MobilityManagementPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies\Item\MobilityManagementPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileDeviceManagementPolicies property of the microsoft.graph.policyRoot entity.
*/
class MobileDeviceManagementPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileDeviceManagementPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $mobilityManagementPolicyId The unique identifier of mobilityManagementPolicy
     * @return MobilityManagementPolicyItemRequestBuilder
    */
    public function byMobilityManagementPolicyId(string $mobilityManagementPolicyId): MobilityManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobilityManagementPolicy%2Did'] = $mobilityManagementPolicyId;
        return new MobilityManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileDeviceManagementPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/mobileDeviceManagementPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the mobilityManagementPolicy objects and their properties.
     * @param MobileDeviceManagementPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobilityManagementPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mobiledevicemanagementpolicies-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileDeviceManagementPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobilityManagementPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mobileDeviceManagementPolicies for policies
     * @param MobilityManagementPolicy $body The request body
     * @param MobileDeviceManagementPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobilityManagementPolicy|null>
     * @throws Exception
    */
    public function post(MobilityManagementPolicy $body, ?MobileDeviceManagementPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobilityManagementPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the mobilityManagementPolicy objects and their properties.
     * @param MobileDeviceManagementPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileDeviceManagementPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mobileDeviceManagementPolicies for policies
     * @param MobilityManagementPolicy $body The request body
     * @param MobileDeviceManagementPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobilityManagementPolicy $body, ?MobileDeviceManagementPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileDeviceManagementPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileDeviceManagementPoliciesRequestBuilder {
        return new MobileDeviceManagementPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
