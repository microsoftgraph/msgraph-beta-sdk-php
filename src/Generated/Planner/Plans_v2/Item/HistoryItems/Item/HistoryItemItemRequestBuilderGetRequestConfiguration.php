<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\HistoryItems\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HistoryItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HistoryItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HistoryItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HistoryItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HistoryItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HistoryItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HistoryItemItemRequestBuilderGetQueryParameters {
        return new HistoryItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
