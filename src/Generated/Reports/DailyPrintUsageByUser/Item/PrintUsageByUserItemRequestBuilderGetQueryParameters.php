<?php

namespace Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageByUser\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a user's usage summary for a particular time period. See the printUsageByUser documentation for descriptions of each of the endpoints. This API is available in the following national cloud deployments.
*/
class PrintUsageByUserItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PrintUsageByUserItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
