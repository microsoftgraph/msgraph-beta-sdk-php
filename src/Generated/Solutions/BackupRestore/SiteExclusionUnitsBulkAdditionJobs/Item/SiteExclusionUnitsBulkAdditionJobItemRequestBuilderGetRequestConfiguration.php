<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SiteExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters {
        return new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
