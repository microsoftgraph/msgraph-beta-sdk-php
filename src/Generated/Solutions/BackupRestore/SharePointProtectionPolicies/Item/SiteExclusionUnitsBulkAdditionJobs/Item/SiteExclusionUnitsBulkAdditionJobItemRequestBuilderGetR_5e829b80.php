<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration
*/
class SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetR_5e829b80 extends BaseRequestConfiguration 
{
    /**
     * @var SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105|null $queryParameters Request query parameters
    */
    public ?SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105 $queryParameters = null;
    
    /**
     * Instantiates a new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetR_5e829b80 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105 {
        return new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105($expand, $select);
    }

}
