<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf extends BaseRequestConfiguration 
{
    /**
     * @var DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f|null $queryParameters Request query parameters
    */
    public ?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f $queryParameters = null;
    
    /**
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f {
        return new DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_6c93b79f($expand, $select);
    }

}
