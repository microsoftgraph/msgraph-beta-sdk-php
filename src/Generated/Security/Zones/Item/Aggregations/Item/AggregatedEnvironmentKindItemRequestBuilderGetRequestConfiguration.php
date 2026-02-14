<?php

namespace Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AggregatedEnvironmentKindItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters {
        return new AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
