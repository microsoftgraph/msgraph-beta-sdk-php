<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Branding\Themes\Item\Localizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters {
        return new OrganizationalBrandingThemeLocalizationLocaleItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
