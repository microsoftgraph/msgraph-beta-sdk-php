<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesOrders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SalesOrderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SalesOrderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SalesOrderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SalesOrderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SalesOrderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SalesOrderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SalesOrderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SalesOrderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SalesOrderItemRequestBuilderGetQueryParameters {
        return new SalesOrderItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
