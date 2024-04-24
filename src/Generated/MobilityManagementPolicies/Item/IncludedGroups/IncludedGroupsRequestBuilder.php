<?php

namespace Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\IncludedGroups;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\IncludedGroups\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\IncludedGroups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\IncludedGroups\Ref\RefRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the includedGroups property of the microsoft.graph.mobilityManagementPolicy entity.
*/
class IncludedGroupsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of mobilityManagementPolicy entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Beta/Generated.mobilityManagementPolicies.item.includedGroups.item collection
     * @param string $groupId The unique identifier of group
     * @return GroupItemRequestBuilder
    */
    public function byGroupId(string $groupId): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $groupId;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncludedGroupsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/mobilityManagementPolicies/{mobilityManagementPolicy%2Did}/includedGroups{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Microsoft Entra groups under the scope of the mobility management application if appliesTo is selected
     * @param IncludedGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupCollectionResponse|null>
     * @throws Exception
    */
    public function get(?IncludedGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Microsoft Entra groups under the scope of the mobility management application if appliesTo is selected
     * @param IncludedGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncludedGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IncludedGroupsRequestBuilder
    */
    public function withUrl(string $rawUrl): IncludedGroupsRequestBuilder {
        return new IncludedGroupsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
