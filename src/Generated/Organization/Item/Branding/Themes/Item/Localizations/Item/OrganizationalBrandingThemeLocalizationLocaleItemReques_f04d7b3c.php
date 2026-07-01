<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Themes\Item\Localizations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents a locale-based branding theme. Original name: OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters
*/
class OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c 
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
     * Instantiates a new OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
