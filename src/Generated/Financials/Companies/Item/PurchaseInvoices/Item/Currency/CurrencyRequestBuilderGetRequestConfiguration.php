<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\PurchaseInvoices\Item\Currency;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrencyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrencyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrencyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrencyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrencyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrencyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrencyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CurrencyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CurrencyRequestBuilderGetQueryParameters {
        return new CurrencyRequestBuilderGetQueryParameters($expand, $select);
    }

}
