<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\FindRoomsWithRoomList;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the findRooms method.
*/
class FindRoomsWithRoomListRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FindRoomsWithRoomListRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $roomList Usage: RoomList='{RoomList}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $roomList = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/findRooms(RoomList=\'{RoomList}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['RoomList'] = $roomList;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function findRooms
     * @param FindRoomsWithRoomListRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FindRoomsWithRoomListGetResponse|null>
     * @throws Exception
    */
    public function get(?FindRoomsWithRoomListRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FindRoomsWithRoomListGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function findRooms
     * @param FindRoomsWithRoomListRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FindRoomsWithRoomListRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FindRoomsWithRoomListRequestBuilder
    */
    public function withUrl(string $rawUrl): FindRoomsWithRoomListRequestBuilder {
        return new FindRoomsWithRoomListRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
