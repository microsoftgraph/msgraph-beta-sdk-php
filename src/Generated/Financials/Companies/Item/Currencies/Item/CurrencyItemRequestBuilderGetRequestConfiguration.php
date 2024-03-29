<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Currencies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrencyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrencyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrencyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrencyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrencyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CurrencyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CurrencyItemRequestBuilderGetQueryParameters {
        return new CurrencyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
