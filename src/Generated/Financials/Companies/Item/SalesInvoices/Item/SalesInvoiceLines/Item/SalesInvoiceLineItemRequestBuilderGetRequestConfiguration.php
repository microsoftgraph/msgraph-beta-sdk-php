<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SalesInvoiceLineItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SalesInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SalesInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SalesInvoiceLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SalesInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SalesInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SalesInvoiceLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SalesInvoiceLineItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SalesInvoiceLineItemRequestBuilderGetQueryParameters {
        return new SalesInvoiceLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
