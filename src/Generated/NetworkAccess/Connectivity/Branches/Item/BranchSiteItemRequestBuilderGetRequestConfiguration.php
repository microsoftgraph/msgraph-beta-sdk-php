<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\Branches\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BranchSiteItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BranchSiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BranchSiteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BranchSiteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BranchSiteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BranchSiteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BranchSiteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BranchSiteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BranchSiteItemRequestBuilderGetQueryParameters {
        return new BranchSiteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
