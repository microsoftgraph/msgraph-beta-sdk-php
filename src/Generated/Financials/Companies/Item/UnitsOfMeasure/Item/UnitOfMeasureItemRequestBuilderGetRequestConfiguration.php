<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\UnitsOfMeasure\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnitOfMeasureItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UnitOfMeasureItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnitOfMeasureItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UnitOfMeasureItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnitOfMeasureItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnitOfMeasureItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnitOfMeasureItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnitOfMeasureItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnitOfMeasureItemRequestBuilderGetQueryParameters {
        return new UnitOfMeasureItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
