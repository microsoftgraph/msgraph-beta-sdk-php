<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceOperations\Item\GetScopesForUserWithUserid;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetScopesForUserWithUseridRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetScopesForUserWithUseridRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetScopesForUserWithUseridRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetScopesForUserWithUseridRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetScopesForUserWithUseridRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetScopesForUserWithUseridRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetScopesForUserWithUseridRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetScopesForUserWithUseridRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetScopesForUserWithUseridRequestBuilderGetQueryParameters {
        return new GetScopesForUserWithUseridRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
