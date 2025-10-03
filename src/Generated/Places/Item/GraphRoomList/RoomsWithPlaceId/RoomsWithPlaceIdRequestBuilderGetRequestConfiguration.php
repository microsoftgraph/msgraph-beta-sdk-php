<?php

namespace Microsoft\\Graph\\Beta\\Generated\Places\Item\GraphRoomList\RoomsWithPlaceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoomsWithPlaceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RoomsWithPlaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoomsWithPlaceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RoomsWithPlaceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoomsWithPlaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoomsWithPlaceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoomsWithPlaceIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoomsWithPlaceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RoomsWithPlaceIdRequestBuilderGetQueryParameters {
        return new RoomsWithPlaceIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
