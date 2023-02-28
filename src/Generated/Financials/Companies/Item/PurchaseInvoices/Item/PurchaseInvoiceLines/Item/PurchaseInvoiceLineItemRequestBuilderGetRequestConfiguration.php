<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PurchaseInvoiceLineItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PurchaseInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PurchaseInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PurchaseInvoiceLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PurchaseInvoiceLineItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PurchaseInvoiceLineItemRequestBuilderGetQueryParameters {
        return new PurchaseInvoiceLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PurchaseInvoiceLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PurchaseInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PurchaseInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
