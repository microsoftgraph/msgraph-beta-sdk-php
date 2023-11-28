<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\ItemInsights;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of an insightsSettings object for displaying or returning item insights in an organization. To learn how to customize the privacy of item insights in an organization, see Customize item insights privacy. 
*/
class ItemInsightsRequestBuilderGetQueryParameters 
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
     * Instantiates a new itemInsightsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
