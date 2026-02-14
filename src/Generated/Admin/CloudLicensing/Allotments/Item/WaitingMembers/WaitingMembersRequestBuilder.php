<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\Item\WaitingMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\Item\WaitingMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Allotments\Item\WaitingMembers\Item\WaitingMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudLicensing\WaitingMemberCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the waitingMembers property of the microsoft.graph.cloudLicensing.allotment entity.
*/
class WaitingMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the waitingMembers property of the microsoft.graph.cloudLicensing.allotment entity.
     * @param string $waitingMemberId The unique identifier of waitingMember
     * @return WaitingMemberItemRequestBuilder
    */
    public function byWaitingMemberId(string $waitingMemberId): WaitingMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['waitingMember%2Did'] = $waitingMemberId;
        return new WaitingMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WaitingMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/cloudLicensing/allotments/{allotment%2Did}/waitingMembers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of over-assigned users who are in the waiting room due to license capacity limits. Use /admin/cloudLicensing/allotments/{allotmentId}/waitingMembers to retrieve all waitingMember objects for a specific allotment. Use /users/{userId}/cloudLicensing/waitingMembers to retrieve all allotments that a specific user is waiting for.
     * @param WaitingMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WaitingMemberCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudlicensing-allotment-list-waitingmembers?view=graph-rest-beta Find more info here
    */
    public function get(?WaitingMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WaitingMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of over-assigned users who are in the waiting room due to license capacity limits. Use /admin/cloudLicensing/allotments/{allotmentId}/waitingMembers to retrieve all waitingMember objects for a specific allotment. Use /users/{userId}/cloudLicensing/waitingMembers to retrieve all allotments that a specific user is waiting for.
     * @param WaitingMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WaitingMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WaitingMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): WaitingMembersRequestBuilder {
        return new WaitingMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
