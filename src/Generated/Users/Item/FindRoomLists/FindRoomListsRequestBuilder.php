<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\FindRoomLists;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the findRoomLists method.
*/
class FindRoomListsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FindRoomListsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/findRoomLists(){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the room lists defined in a tenant, as represented by their emailAddress objects. Tenants can organize meeting rooms into room lists. In this API, each meeting room and room list is represented by an emailAddress instance.You can get all the room lists in the tenant, get all the rooms in the tenant, or get all the rooms in a specific room list.
     * @param FindRoomListsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FindRoomListsGetResponse|null>
     * @throws Exception
    */
    public function get(?FindRoomListsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FindRoomListsGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the room lists defined in a tenant, as represented by their emailAddress objects. Tenants can organize meeting rooms into room lists. In this API, each meeting room and room list is represented by an emailAddress instance.You can get all the room lists in the tenant, get all the rooms in the tenant, or get all the rooms in a specific room list.
     * @param FindRoomListsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FindRoomListsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FindRoomListsRequestBuilder
    */
    public function withUrl(string $rawUrl): FindRoomListsRequestBuilder {
        return new FindRoomListsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
