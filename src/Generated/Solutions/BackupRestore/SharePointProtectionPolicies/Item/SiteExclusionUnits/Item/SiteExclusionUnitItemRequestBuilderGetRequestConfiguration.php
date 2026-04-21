<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteExclusionUnits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SiteExclusionUnitItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SiteExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SiteExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SiteExclusionUnitItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteExclusionUnitItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteExclusionUnitItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteExclusionUnitItemRequestBuilderGetQueryParameters {
        return new SiteExclusionUnitItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
