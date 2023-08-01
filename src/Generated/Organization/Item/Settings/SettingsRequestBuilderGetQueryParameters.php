<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties and relationships of an organizationSettings object, including profileCardProperties. This operation does not return insightsSettings. Depending on the type of insights, you can get their settings by using list itemInsights or list peopleInsights. This operation does not return microsoftApplicationDataAccessSettings. To get microsoftApplicationDataAccessSettings, use list microsoftApplicationDataAccessSettings.
*/
class SettingsRequestBuilderGetQueryParameters 
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
     * Instantiates a new settingsRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
