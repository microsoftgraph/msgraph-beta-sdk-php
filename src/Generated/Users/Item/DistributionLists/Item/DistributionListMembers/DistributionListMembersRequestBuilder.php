<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\DistributionLists\Item\DistributionListMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DistributionListMember;
use Microsoft\Graph\Beta\Generated\Models\DistributionListMemberCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\DistributionLists\Item\DistributionListMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\DistributionLists\Item\DistributionListMembers\Item\DistributionListMemberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the distributionListMembers property of the microsoft.graph.distributionList entity.
*/
class DistributionListMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the distributionListMembers property of the microsoft.graph.distributionList entity.
     * @param string $distributionListMemberId The unique identifier of distributionListMember
     * @return DistributionListMemberItemRequestBuilder
    */
    public function byDistributionListMemberId(string $distributionListMemberId): DistributionListMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['distributionListMember%2Did'] = $distributionListMemberId;
        return new DistributionListMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DistributionListMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/distributionLists/{distributionList%2Did}/distributionListMembers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The expanded members of the distribution list. Each member contains detailed information including resolved email addresses. Read-only.
     * @param DistributionListMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DistributionListMemberCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DistributionListMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DistributionListMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to distributionListMembers for users
     * @param DistributionListMember $body The request body
     * @param DistributionListMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DistributionListMember|null>
     * @throws Exception
    */
    public function post(DistributionListMember $body, ?DistributionListMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DistributionListMember::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The expanded members of the distribution list. Each member contains detailed information including resolved email addresses. Read-only.
     * @param DistributionListMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DistributionListMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to distributionListMembers for users
     * @param DistributionListMember $body The request body
     * @param DistributionListMembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DistributionListMember $body, ?DistributionListMembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DistributionListMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): DistributionListMembersRequestBuilder {
        return new DistributionListMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
