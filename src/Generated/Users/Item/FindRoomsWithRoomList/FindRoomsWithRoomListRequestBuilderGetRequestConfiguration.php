<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\FindRoomsWithRoomList;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FindRoomsWithRoomListRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FindRoomsWithRoomListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FindRoomsWithRoomListRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FindRoomsWithRoomListRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FindRoomsWithRoomListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FindRoomsWithRoomListRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FindRoomsWithRoomListRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return FindRoomsWithRoomListRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): FindRoomsWithRoomListRequestBuilderGetQueryParameters {
        return new FindRoomsWithRoomListRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
