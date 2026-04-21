<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveExclusionUnits\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriveExclusionUnitItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DriveExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriveExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DriveExclusionUnitItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveExclusionUnitItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveExclusionUnitItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveExclusionUnitItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveExclusionUnitItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveExclusionUnitItemRequestBuilderGetQueryParameters {
        return new DriveExclusionUnitItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
