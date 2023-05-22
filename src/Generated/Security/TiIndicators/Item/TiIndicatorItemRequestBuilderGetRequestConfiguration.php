<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TiIndicatorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TiIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TiIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TiIndicatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TiIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TiIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TiIndicatorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TiIndicatorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TiIndicatorItemRequestBuilderGetQueryParameters {
        return new TiIndicatorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
