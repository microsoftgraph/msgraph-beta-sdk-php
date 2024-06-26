<?php

namespace Microsoft\Graph\Beta\Generated\Places\GraphRoom;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\RoomCollectionResponse;
use Microsoft\Graph\Beta\Generated\Places\GraphRoom\Count\CountRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to room.
*/
class GraphRoomRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphRoomRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/places/graph.room{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of the specified type of place objects defined in the tenant.  You can do the following for a given tenant:- List all the rooms.- List all the workspaces.- List all the room lists.- List rooms in a specific room list.- List workspaces in a specific room list. A place object can be one of the following types: The room, workspace and roomList resources are derived from the place object. By default, this operation returns up to 100 places per page.  Compared with the findRooms and findRoomLists functions, this operation returns a richer payload for rooms and room lists. For details about how they compare, see Using the places API.
     * @param GraphRoomRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoomCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/place-list?view=graph-rest-beta Find more info here
    */
    public function get(?GraphRoomRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoomCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of the specified type of place objects defined in the tenant.  You can do the following for a given tenant:- List all the rooms.- List all the workspaces.- List all the room lists.- List rooms in a specific room list.- List workspaces in a specific room list. A place object can be one of the following types: The room, workspace and roomList resources are derived from the place object. By default, this operation returns up to 100 places per page.  Compared with the findRooms and findRoomLists functions, this operation returns a richer payload for rooms and room lists. For details about how they compare, see Using the places API.
     * @param GraphRoomRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphRoomRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphRoomRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphRoomRequestBuilder {
        return new GraphRoomRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
