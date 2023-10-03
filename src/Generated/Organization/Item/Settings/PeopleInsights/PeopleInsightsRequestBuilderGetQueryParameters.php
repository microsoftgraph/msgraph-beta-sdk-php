<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\PeopleInsights;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of an insightsSettings object for displaying or returning people insights in an organization. To learn how to customize privacy for people insights in an organization, see Customize people insights privacy in Microsoft Graph. This API is supported in the following national cloud deployments.
*/
class PeopleInsightsRequestBuilderGetQueryParameters 
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
     * Instantiates a new peopleInsightsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
