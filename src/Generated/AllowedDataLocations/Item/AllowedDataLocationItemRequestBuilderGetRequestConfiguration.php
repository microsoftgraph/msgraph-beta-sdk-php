<?php

namespace Microsoft\\Graph\\Beta\\Generated\AllowedDataLocations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllowedDataLocationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllowedDataLocationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllowedDataLocationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllowedDataLocationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllowedDataLocationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllowedDataLocationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllowedDataLocationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AllowedDataLocationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AllowedDataLocationItemRequestBuilderGetQueryParameters {
        return new AllowedDataLocationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
