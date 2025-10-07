<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\TaxGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaxGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TaxGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaxGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TaxGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TaxGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TaxGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TaxGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TaxGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TaxGroupItemRequestBuilderGetQueryParameters {
        return new TaxGroupItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
