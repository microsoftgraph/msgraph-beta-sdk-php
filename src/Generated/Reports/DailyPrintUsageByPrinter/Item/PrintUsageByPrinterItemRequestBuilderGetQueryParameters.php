<?php

namespace Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageByPrinter\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a printer's usage summary for a particular time period. For descriptions of each of the endpoints, see printUsageByPrinter. This API is supported in the following national cloud deployments.
*/
class PrintUsageByPrinterItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PrintUsageByPrinterItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
