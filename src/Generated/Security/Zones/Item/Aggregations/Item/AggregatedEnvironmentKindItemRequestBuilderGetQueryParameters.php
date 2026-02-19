<?php

namespace Microsoft\Graph\Beta\Generated\Security\Zones\Item\Aggregations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Environment count summaries by type. Read-only. Supports $filter (eq) on the kind property. For example, $filter=aggregations/any(a: a/kind eq 'azureSubscription').
*/
class AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AggregatedEnvironmentKindItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
