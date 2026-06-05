<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SharePointGroupIdentityMappingItemRequestBuilderGetRequestConfiguration
*/
class SharePointGroupIdentityMappingItemRequestBuilderGetRequ_2bf17795 extends BaseRequestConfiguration 
{
    /**
     * @var SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99|null $queryParameters Request query parameters
    */
    public ?SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99 $queryParameters = null;
    
    /**
     * Instantiates a new SharePointGroupIdentityMappingItemRequestBuilderGetRequ_2bf17795 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99 {
        return new SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99($expand, $select);
    }

}
