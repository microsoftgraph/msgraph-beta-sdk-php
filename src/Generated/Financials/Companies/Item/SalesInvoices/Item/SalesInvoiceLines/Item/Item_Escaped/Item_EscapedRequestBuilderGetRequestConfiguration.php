<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoices\Item\SalesInvoiceLines\Item\Item_Escaped;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Item_EscapedRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Item_EscapedRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Item_EscapedRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Item_EscapedRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Item_EscapedRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Item_EscapedRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Item_EscapedRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return Item_EscapedRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): Item_EscapedRequestBuilderGetQueryParameters {
        return new Item_EscapedRequestBuilderGetQueryParameters($expand, $select);
    }

}
