<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsReceivable\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgedAccountsReceivableItemRequestBuilderGetRequestConfiguration 
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
     * @var AgedAccountsReceivableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgedAccountsReceivableItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgedAccountsReceivableItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgedAccountsReceivableItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AgedAccountsReceivableItemRequestBuilderGetQueryParameters {
        return new AgedAccountsReceivableItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AgedAccountsReceivableItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AgedAccountsReceivableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgedAccountsReceivableItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
