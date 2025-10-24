<?php

namespace Microsoft\\Graph\\Beta\\Generated\Places\Item\GraphRoomList\WorkspacesWithPlaceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkspacesWithPlaceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkspacesWithPlaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkspacesWithPlaceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkspacesWithPlaceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkspacesWithPlaceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkspacesWithPlaceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkspacesWithPlaceIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkspacesWithPlaceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkspacesWithPlaceIdRequestBuilderGetQueryParameters {
        return new WorkspacesWithPlaceIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
