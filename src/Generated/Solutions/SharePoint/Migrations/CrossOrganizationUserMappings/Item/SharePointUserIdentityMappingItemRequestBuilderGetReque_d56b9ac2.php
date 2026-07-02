<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationUserMappings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: SharePointUserIdentityMappingItemRequestBuilderGetRequestConfiguration
*/
class SharePointUserIdentityMappingItemRequestBuilderGetReque_d56b9ac2 extends BaseRequestConfiguration 
{
    /**
     * @var SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819|null $queryParameters Request query parameters
    */
    public ?SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819 $queryParameters = null;
    
    /**
     * Instantiates a new SharePointUserIdentityMappingItemRequestBuilderGetReque_d56b9ac2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819 {
        return new SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819($expand, $select);
    }

}
