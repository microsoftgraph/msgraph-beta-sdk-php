<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesInvoiceLines\Item\Item\ItemCategory;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ItemCategoryRequestBuilderGetRequestConfiguration 
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
     * @var ItemCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ItemCategoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new itemCategoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ItemCategoryRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ItemCategoryRequestBuilderGetQueryParameters {
        return new ItemCategoryRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new itemCategoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ItemCategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ItemCategoryRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
