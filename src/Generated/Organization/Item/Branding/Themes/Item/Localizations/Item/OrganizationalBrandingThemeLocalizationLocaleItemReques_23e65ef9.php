<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Themes\Item\Localizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetRequestConfiguration
*/
class OrganizationalBrandingThemeLocalizationLocaleItemReques_23e65ef9 extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c|null $queryParameters Request query parameters
    */
    public ?OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationalBrandingThemeLocalizationLocaleItemReques_23e65ef9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c {
        return new OrganizationalBrandingThemeLocalizationLocaleItemReques_f04d7b3c($expand, $select);
    }

}
