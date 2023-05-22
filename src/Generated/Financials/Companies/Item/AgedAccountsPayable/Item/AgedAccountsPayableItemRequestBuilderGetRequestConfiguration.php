<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\AgedAccountsPayable\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgedAccountsPayableItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgedAccountsPayableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgedAccountsPayableItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgedAccountsPayableItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgedAccountsPayableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgedAccountsPayableItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgedAccountsPayableItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgedAccountsPayableItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgedAccountsPayableItemRequestBuilderGetQueryParameters {
        return new AgedAccountsPayableItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
