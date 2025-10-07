<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\TaxAreas\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaxAreaItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TaxAreaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaxAreaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TaxAreaItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TaxAreaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TaxAreaItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TaxAreaItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TaxAreaItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TaxAreaItemRequestBuilderGetQueryParameters {
        return new TaxAreaItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
