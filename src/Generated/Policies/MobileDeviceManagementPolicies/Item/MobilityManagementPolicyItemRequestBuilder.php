<?php

namespace Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MobilityManagementPolicy;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Policies\MobileDeviceManagementPolicies\Item\IncludedGroups\IncludedGroupsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileDeviceManagementPolicies property of the microsoft.graph.policyRoot entity.
*/
class MobilityManagementPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the includedGroups property of the microsoft.graph.mobilityManagementPolicy entity.
    */
    public function includedGroups(): IncludedGroupsRequestBuilder {
        return new IncludedGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MobilityManagementPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/mobileDeviceManagementPolicies/{mobilityManagementPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a mobilityManagementPolicy object.
     * @param MobilityManagementPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mobiledevicemanagementpolicies-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?MobilityManagementPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a mobilityManagementPolicy object.
     * @param MobilityManagementPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobilityManagementPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mobiledevicemanagementpolicies-get?view=graph-rest-beta Find more info here
    */
    public function get(?MobilityManagementPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobilityManagementPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a mobilityManagementPolicy object.
     * @param MobilityManagementPolicy $body The request body
     * @param MobilityManagementPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobilityManagementPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mobiledevicemanagementpolicies-update?view=graph-rest-beta Find more info here
    */
    public function patch(MobilityManagementPolicy $body, ?MobilityManagementPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobilityManagementPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a mobilityManagementPolicy object.
     * @param MobilityManagementPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MobilityManagementPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a mobilityManagementPolicy object.
     * @param MobilityManagementPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobilityManagementPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a mobilityManagementPolicy object.
     * @param MobilityManagementPolicy $body The request body
     * @param MobilityManagementPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MobilityManagementPolicy $body, ?MobilityManagementPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobilityManagementPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MobilityManagementPolicyItemRequestBuilder {
        return new MobilityManagementPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
