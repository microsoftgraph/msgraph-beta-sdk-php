<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesQuoteLines\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SalesQuoteLineItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SalesQuoteLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SalesQuoteLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SalesQuoteLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SalesQuoteLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SalesQuoteLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SalesQuoteLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SalesQuoteLineItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SalesQuoteLineItemRequestBuilderGetQueryParameters {
        return new SalesQuoteLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
