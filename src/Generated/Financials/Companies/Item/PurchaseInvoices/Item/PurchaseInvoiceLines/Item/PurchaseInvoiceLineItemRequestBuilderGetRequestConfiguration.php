<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\PurchaseInvoices\Item\PurchaseInvoiceLines\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PurchaseInvoiceLineItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PurchaseInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PurchaseInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PurchaseInvoiceLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PurchaseInvoiceLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PurchaseInvoiceLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PurchaseInvoiceLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PurchaseInvoiceLineItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PurchaseInvoiceLineItemRequestBuilderGetQueryParameters {
        return new PurchaseInvoiceLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
